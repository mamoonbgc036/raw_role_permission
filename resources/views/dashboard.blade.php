@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>Dashboard</span>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-danger btn-sm">Logout</button>
        </form>
    </div>
    <div class="card-body">
        <h4>Welcome, {{ auth()->user()->name }}!</h4>
        <p>You are logged in.</p>
    </div>
</div>
@endsection