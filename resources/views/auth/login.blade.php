@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="card" style="width: 300px">
        <div class="text-lg mb-6 border-bottom-thin">{{ __('Login') }}</div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">
                    <label for="email" class="text-gray-500 text-sm">{{ __('E-Mail Address') }}</label>

                    <div class="my-2">
                        <input id="email" type="email" class="w-full p-3 mb-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <label for="password" class="text-gray-500 text-sm">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="w-full p-3 mb-4 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="text-center mb-4 text-sm text-gray-500">
                    <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <div class="mb-3">
                    <button type="submit" class="button button--blue w-full">
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
@endsection
