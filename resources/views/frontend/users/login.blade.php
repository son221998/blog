@extends('layouts.frontend.app')
@section('content')
<div class="container forms">
    <div class="form-login">
        <div class="form-content">
            <header>Login Here</header>
            <form method="POST" action="{{ route('post.home') }}">
                <div class="field input-field">
                    <input type="email" placeholder="Email" class="input" value={{old('email')}} >
                </div>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <div class="field input-field">
                    <input type="password" placeholder="Password" class="password" value={{old('email')}} >
                    <i class='bx bx-hide eye-icon'></i>
                </div>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <div class="form-link">
                    <a href="#" class="forgot-pass">Forgot password?</a>
                </div>
                <div class="field button-field">
                    <button>Login</button>
                </div>
                <div class="form-link">
                    <span> Dont have an account? <a href="{{ route('frontend.users.register') }}" class="link signup-link">Signup</a></span>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection