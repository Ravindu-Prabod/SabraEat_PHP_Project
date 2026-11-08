<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // ---------- Pages ----------
    public function showRegisterCustomer()
    {
        return view('register_customer');
    }

    public function showRegisterOutlet()
    {
        return view('register_outlet');
    }

    public function showLogin()
    {
        return view('login');
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

        return redirect('/');
    }

    // ---------- Outlet Admin register ----------
    public function registerOutlet(Request $request)
    {
        $data = $request->validate([
            'outlet'   => 'required|string|max:255',
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'outlet'   => $data['outlet'],
            'role'     => 'outlet_admin',
            'password' => Hash::make($data['password']),
        ]);

        Auth::login($user);

        return redirect('/');
    }
}