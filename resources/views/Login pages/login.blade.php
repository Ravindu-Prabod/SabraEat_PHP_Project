@extends('layout')

@section('title', 'Log In - SabraEat')

@section('content')


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

        <button type="submit" class="btn" style="margin-top: 16px;">Log In to SabraEat &rarr;</button>

</form>

<p class="login-link">Don't have an account? <a href="{{ route('register') }}">Register Here</a></p>

