@extends('layouts.auth')

@section('content')
<div class="auth-card card">
    <div class="auth-header">
        <div class="auth-logo">Admin Panel</div>
        <h4>Sign in to your account</h4>
    </div>

    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary w-100">Sign in</button>
    </form>

    <div class="mt-3 text-center">
        <a href="{{ route('password.request') }}">Forgot your password?</a>
    </div>
    <div class="mt-2 text-center">
        Don't have an account? <a href="{{ route('register') }}">Register</a>
    </div>
</div>
@endsection