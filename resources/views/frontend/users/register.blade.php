@extends('layouts.frontend.app')
@section('content')
    <div class="container forms">
        <div class="form-signup">
            <div class="form-content">
                <h2>Sign Up Here</h2>
                <form method="POST" action={{ route('frontend.register.store') }}>
                    {{ csrf_field() }}
                    <div class="field input-field">
                        <input for="name" type="text" class="form-control" id="name" name="name"
                            placeholder="Name" required value={{old('name')}}>
                    </div>
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    <div class="field input-field">
                        <input for="email" type="email" class="form-control" id="email" name="email"
                            placeholder="Email" required value={{old('email')}} >
                    </div>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    <div class="field input-field">
                        <input for="phone" type="phone" class="form-control" id="phone" name="phone"
                            placeholder="Phone Number" required value={{old('phone')}}>
                    </div>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                    <div class="field input-field">
                        <input for="password" type="password" class="form-control" id="password" name="password"
                            placeholder="Password" required value={{old('password')}} >
                    </div>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    <div class="field input-field">
                        <input for="password" type="password" class="form-control" id="confirm_paassword"
                            name="password_confirmation" placeholder="Confirm password" required value={{old('password_confirmation')}} >
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    <div class="field button-field">
                        <button style="cursor:pointer" type="submit">Sign Up</button>
                    </div>
                    <div class="form-link">
                        <span>Already have an account? <a href="{{ route('frontend.users.login') }}"
                                class="link login-link">Login</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
