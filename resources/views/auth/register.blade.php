@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="card">
        <h1>Create an account</h1>
        <p>Join Skill Share Community to connect and learn together.</p>

        @if ($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for="name">Name</label>
            <input
                id="name"
                type="text"
                name="name"
                value="{{ old('name') }}"
                required
                autofocus
            >

            <label for="email">Email</label>
            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
            >

            <label for="password">Password</label>
            <input
                id="password"
                type="password"
                name="password"
                required
            >

            <label for="password_confirmation">Confirm Password</label>
            <input
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                required
            >

            <button class="primary" type="submit">
                Create account
            </button>
        </form>

        <p class="helper">
            Already have an account? <a href="{{ route('login') }}">Login</a>
        </p>
    </div>
@endsection
