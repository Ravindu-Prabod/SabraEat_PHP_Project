@extends('layout')

@section('title', 'Register customer - SabraEat')

@section('content')
<div class="card">

    <h1>Create SabraEat Account</h1>
    <p class="subtitle">Register as a Student or Campus Customer</p>

    @if ($errors->any())
    <div class="alert">
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    </div>
@endif

    <div class="tabs">
        <a href="{{ route('register') }}" class="tab active">Student / Customer</a>
        <a href="{{ route('register.outlet') }}" class="tab">Outlet Admin</a>
    </div>

    <form action="{{ route('register.post') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="name" placeholder="e.g. Nimal Perera" required>
        </div>

        <div class="form-group">
            <label>Email Address</label>
            <input type="email" name="email" placeholder="e.g. nimalperera@gmail.com" required>
        </div>

        <div class="form-group">
            <label>Mobile Phone Number</label>
            <input type="text" name="phone" placeholder="+94 00 000 0000" required>
        </div>

        <div class="form-group">
            <label>Create Password</label>
            <input type="password" name="password" placeholder="••••••••••••" required>
        </div>

        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" placeholder="••••••••••••" required>
        </div>

        <button type="submit" class="btn">Register Account &rarr;</button>
    </form>

    <p class="login-link">Already have an account? <a href="{{ route('login') }}">Log In</a></p>

</div>
@endsection