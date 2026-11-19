@extends('layout')

@section('title', 'Log In - SabraEat')

@section('content')

<div class="card">

    <h1 style="margin-top: 28px;">Welcome Back</h1>
    <p class="subtitle">Please enter your credentials to log in</p>


    @if ($errors->any())
    <div class="alert">
        @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
        @endforeach
    </div>

    @endif
    <div class="tabs" style="margin-top: 32px;">
        <a href="{{ route('login') }}" class="tab active">Customer</a>
        <a href="{{ route('login.outlet') }}" class="tab">Outlet Admin</a>
    </div>


    <form action="{{ route('login.post') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="nimalperera@gmail.com" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="••••••••••••" required>
        </div>

        <p style="text-align: right; margin-top: 8px; font-size: 12px; font-weight: 700;">
            <a href="#" style="color: #7c3f00; text-decoration: none;">Forgot Password?</a>
        </p>

        <button type="submit" class="btn" style="margin-top: 16px;">Log In to SabraEat &rarr;</button>

    </form>

    <p class="login-link">Don't have an account? <a href="{{ route('register') }}">Register Here</a></p>

</div>