@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col s4 offset-s4">
                <div class="card">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="card-content white-text">
                            <span class="card-title black-text">{{ __('Register') }}</span>
                            <div class="card_body">
                                <div class="row">

                                    <div class="input-field col s12">
                                        <input id="name" type="text" class="validate {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                        <label for="name">{{ __('Name') }}</label>
                                    </div>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback black-text">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                    @endif

                                    <div class="input-field col s12">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                    </div>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback black-text">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                    @endif

                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="validate{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                        <label for="password">{{ __('Password') }}</label>
                                    </div>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback black-text">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                    @endif


                                    <div class="input-field col s12">
                                        <input id="password-confirm" type="password" class="validate" name="password_confirmation" required>
                                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn purple darken-4">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection