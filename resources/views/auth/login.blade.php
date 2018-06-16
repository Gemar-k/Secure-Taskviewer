@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s4 offset-s4">
            <div class="card">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card-content white-text">
                        <span class="card-title black-text">{{ __('Login') }}</span>
                        <div class="card_body">
                            <div class="row">

                                <div class="input-field col s12">
                                    <input id="email" type="email" class="validate {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                </div>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback black-text">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                                <div class="input-field col s12">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    <label for="password">{{ __('Password') }}</label>
                                </div>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback black-text">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                <p class="col s12">
                                    <label>
                                        <input class="filled-in" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span>{{ __('Remember Me') }}</span>
                                    </label>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button type="submit" class="btn purple darken-4">
                            {{ __('Login') }}
                        </button>

                        <a class="purple-text darken-3" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
