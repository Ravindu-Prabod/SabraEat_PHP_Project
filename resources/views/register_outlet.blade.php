@extends('layout')

@section('title', 'Register Outlet Admin - SabraEat')

@section('content')
<div class="card">

    <h1>Register Outlet Admin</h1>
    <p class="subtitle">Create an account to manage your outlet</p>

    @if ($errors->any())
        <div class="alert">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <div class="tabs">
        <a href="{{ route('register') }}" class="tab">Student / Customer</a>
        <a href="{{ route('register.outlet') }}" class="tab active">Outlet Admin</a>
    </div>

    <form action="{{ route('register.outlet.post') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Select Food Outlet / Bakery</label>
            <select name="outlet" required>
                <option value="Uvindu Food Cabin (Uni Main Gate)" {{ old('outlet') == 'Uvindu Food Cabin (Uni Main Gate)' ? 'selected' : '' }}>Uvindu Food Cabin (Uni Main Gate)</option>
                <option value="Campus Canteen" {{ old('outlet') == 'Campus Canteen' ? 'selected' : '' }}>Campus Canteen</option>
                <option value="Sabra Bakery" {{ old('outlet') == 'Sabra Bakery' ? 'selected' : '' }}>Sabra Bakery</option>
            </select>
        </div>

        <div class="form-group">
            <label>Outlet Manager Name</label>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="e.g. Uvindu Perera" required>
        </div>

        <div class="form-group">
            <label>Official Work Email</label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="manager@uvindufood.lk" required>
        </div>

        <div class="form-group">
            <label>Create Admin Password</label>
            <input type="password" name="password" placeholder="••••••••••••" required>
        </div>

        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" placeholder="••••••••••••" required>
        </div>

        <button type="submit" class="btn">Register Outlet Admin Account &rarr;</button>
    </form>

    <p class="login-link">Already registered as Outlet Admin? <a href="{{ route('login') }}">Log In Here</a></p>

</div>
@endsection