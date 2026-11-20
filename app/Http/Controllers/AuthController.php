<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // ---------- Pages ----------

    public function showLogin()
    {
        return view('auth.login');
    }

    public function showLoginOutlet()
    {
        return view('auth.login_outlet');
    }

    public function showRegisterCustomer()
    {
        return view('auth.register_customer');
    }

    public function showRegisterOutlet()
    {
        return view('auth.register_outlet');
    }

    // ---------- Student / Customer register ----------
    public function registerCustomer(Request $request)
    {
        $data = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'phone'    => 'required|string|max:20',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'phone'    => $data['phone'],
            'role'     => 'customer',
            'password' => Hash::make($data['password']),
        ]);

        Auth::login($user);

        return redirect()->route('home')->with('success', 'Welcome to SabraEat! Your customer account has been created.');
    }

    // ---------- Outlet Admin register ----------
    public function registerOutlet(Request $request)
    {
        $data = $request->validate([
            'outlet'   => 'required|string|max:255',
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'phone' => 'nullable|string|max:20',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'phone' => $data['phone'] ?? '+94 77 000 0000',
            'outlet'   => $data['outlet'],
            'role'     => 'outlet_admin',
            'password' => Hash::make($data['password']),
        ]);

        Auth::login($user);

        return redirect()->route('outlet.dashboard')->with('success', "Welcome {$data['name']}! Your Outlet Admin account for {$data['outlet']} is active.");
    }

    //-------------Customer login --------------------
    public function loginCustomer(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        
        if (Auth::attempt($credentials + ['role' => 'customer'])) {
            $request->session()->regenerate();
            return redirect('/');
        }

        return back()->withErrors(['email' => 'Invalid email or password.']);
    }


    //-------------Outlet Adim login --------------------
    public function loginOutlet(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials + ['role' => 'outlet_admin'])) {
            $request->session()->regenerate();
            return redirect('/');
        }

        return back()->withErrors(['email' => 'Invalid admin email or password.']);
    }

    //--------------Logout------------------
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home')->with('success', 'You have been safely logged out.');
    }
}
