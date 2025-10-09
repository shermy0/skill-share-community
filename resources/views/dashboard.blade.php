@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="card">
        <h1>Welcome back, {{ auth()->user()->name }}!</h1>
        <p>You are logged in. Explore the Skill Share Community and start collaborating.</p>
    </div>
@endsection
