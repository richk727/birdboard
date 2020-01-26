@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="card w-1/2">
        <div class="py-5 px-10">
            <div class="text-2xl mb-8 text-center">{{ __('Login') }}</div>
            <p class="text-center text-sm text-default-500 mb-8">{{ __('Not got an account?') }} <a class=" text-sm text-blue-500" href="{{ route('register') }}">Register now!</a></p>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">
                    <label for="email" class="text-default-500 text-sm">{{ __('E-Mail Address') }}</label>

                        <input id="email" type="email" class="form-control text-default-500 bg-card @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="john@doe.co.uk">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <label for="password" class="text-default-500 text-sm">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control text-default-500 bg-card @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="text-center mb-6 text-sm text-default-500">
                    <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <div class="mb-3">
                    <button type="submit" class="button button--blue button--lg w-full">
                        {{ __('Login') }}
                    </button>
                </div>
                <div class="text-center">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-blue-500" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
