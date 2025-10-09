@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="card">
        <h1>Login</h1>
        <p>Please enter your credentials to continue.</p>

        @if ($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="email">Email</label>
            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
            >

            <label for="password">Password</label>
            <input
                id="password"
                type="password"
                name="password"
                required
            >

            <label>
                <input type="checkbox" name="remember">
                Remember me
            </label>

            <button class="primary" type="submit">
                Sign in
            </button>
        </form>

        <p class="helper">
            Need an account? <a href="{{ route('register') }}">Register</a>
        </p>
    </div>
@endsection
