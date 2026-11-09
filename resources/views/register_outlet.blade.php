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
        
        <option value="Uvindu Food Cabin" {{ old('outlet') == 'Uvindu Food Cabin' ? 'selected' : '' }}>Uvindu Food Cabin</option>
        <option value="Shan Food Cabin" {{ old('outlet') == 'Shan Food Cabin' ? 'selected' : '' }}>Shan Food Cabin</option>
        <option value="Eat Art Food Restaurant" {{ old('outlet') == 'Eat Art Food Restaurant' ? 'selected' : '' }}>Eat Art Food Restaurant</option>
        <option value="Jayalanka Food" {{ old('outlet') == 'Jayalanka Food' ? 'selected' : '' }}>Jayalanka Food</option>
        <option value="Dayashanthi" {{ old('outlet') == 'Dayashanthi' ? 'selected' : '' }}>Dayashanthi</option>
        <option value="Royal Box" {{ old('outlet') == 'Royal Box' ? 'selected' : '' }}>Royal Box</option>
        <option value="Bhanini Food" {{ old('outlet') == 'Bhamini Food' ? 'selected' : '' }}>Bhamini Food</option>
        <option value="Samanala Lounge" {{ old('outlet') == 'Samanala Lounge' ? 'selected' : '' }}>Samanala Lounge</option>
        <option value="Mohan Bakery" {{ old('outlet') == 'Mohan Bakery' ? 'selected' : '' }}>Mohan Bakery</option>
        <option value="Liyanage Bakery" {{ old('outlet') == 'Liyanage Bakery' ? 'selected' : '' }}>Liyanage Bakery</option>
    </select>
</div>

        <div class="form-group">
            <label>Outlet Manager Name</label>
            <input type="text" name="name"  placeholder="e.g. Uvindu Perera" required>
        </div>

        <div class="form-group">
            <label>Official Work Email</label>
            <input type="email" name="email"  placeholder="manager@uvindufood.lk" required>
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