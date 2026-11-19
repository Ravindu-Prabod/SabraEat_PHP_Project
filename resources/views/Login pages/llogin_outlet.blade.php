@extends('layout')

@section('title', 'Outlet Admin Login - SabraEat')

@section('content')
<div class="card">

<h1 style="margin-top: 28px;">Outlet Admin Login</h1>

@if ($errors->any())
@foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
            @endif


<form action="{{ route('login.outlet.post') }}" method="POST">
        @csrf

<div class="form-group">
            <label>Admin Username or Outlet Email</label>
            <input type="email" name="email" placeholder="admin_uvindu@sabraeat.lk" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="••••••••••••" required>
        </div>

        <p style="text-align: right; margin-top: 8px; font-size: 12px; font-weight: 700;">
            <a href="#" style="color: #7c3f00; text-decoration: none;">Forgot Admin Password?</a>
        </p>

        <p class="login-link">New Outlet Manager?
             <a href="{{ route('register.outlet') }}">Register Outlet Admin</a></p>

</div>

@endsection