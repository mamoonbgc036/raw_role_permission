@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome</div>

                <div class="card-body">
                    @if (Route::has('login'))
                    <div class="text-center">
                        @auth
                        <a href="{{ url('/admin') }}" class="btn btn-primary">Go to Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection