@extends('auth.auth-layout')
@section('page-title', 'Register - Personal Expanse Management')
@section('form-title', 'Please enter your informations and create a account')
@section('auth-content')
    <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group mb-2">
                <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name')}}" placeholder="Enter your name" required autofocus >
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-2">
                <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email')}}" placeholder="Enter Email Address" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-2">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required >

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-2">
                <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                    name="password_confirmation" required>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign Up</button>
        </form>
    </div>
@endsection
