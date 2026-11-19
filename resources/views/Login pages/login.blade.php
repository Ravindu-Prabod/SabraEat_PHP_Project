@extends('layout')

@section('title', 'Log In - SabraEat')

@section('content')


<form action="{{ route('login.post') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="nimalperera@gmail.com" required>
        </div>

        <div>
            
        </div>