@extends('layouts.auth')

@section('content')
<div class="auth-card card">
    <div class="auth-header">
        <div class="auth-logo">Admin Panel</div>
        <h4>Forgot your password?</h4>
        <p class="text-muted">Enter your email to reset your password</p>
    </div>

    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>
        <button type="submit" class="btn btn-primary w-100">Send Password Reset Link</button>
    </form>

    <div class="mt-3 text-center">
        <a href="{{ route('login') }}">Back to login</a>
    </div>
</div>
@endsection