@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-7 col-10 p-4 rounded-0 shadow bg-white">

        <div class="text-center mb-3">
            <!-- Logo -->
            <img src="{{ asset('images/Purewood-F-logo.svg') }}" alt="Purewood Logo" class="mb-3" style="max-width: 370px;">
        </div>

        <div class="text-left mt-3">
            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group mb-3 text-left">
                    <label for="email" class="mb-2">Email</label>
                    <input type="email" id="email" class="form-control rounded-0" name="email" required autocomplete="email">
                </div>
                <div class="form-group mb-3 text-left">
                    <label for="password" class="mb-2">Password</label>
                    <input type="password" id="password" class="form-control rounded-0" name="password" required autocomplete="current-password">
                </div>
                <div class="d-flex mb-2 justify-content-between">
                    <a href="#" class="text-decoration-none text-dark">Forgot Password</a>
                    <a href="{{ route('register') }}" class="text-decoration-none text-dark">Register Now</a>
                </div>
                <button type="submit" class="btn btn-dark rounded-0 mt-3 w-100">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection