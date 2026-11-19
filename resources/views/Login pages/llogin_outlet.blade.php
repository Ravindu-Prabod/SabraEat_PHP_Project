@extends('layout')

@section('title', 'Outlet Admin Login - SabraEat')

@section('content')


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