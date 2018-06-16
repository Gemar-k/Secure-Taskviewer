@extends('layouts.app')

@section('content')
@include('components.sidebar')
    <div class="body_container">
        <div class="row">
            <div class="col s6">
                <div class="card white">
                        <div class="card-content">
                            <span class="card-title">Profile</span>
                            <div class="row">
                                <div class="col s12">
                                    <p>Name: {{ \Illuminate\Support\Facades\Auth::user()->name }}</p>
                                </div>
                                <div class="col s12">
                                    <p>Email: {{ \Illuminate\Support\Facades\Auth::user()->email }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">

                        </div>
                </div>
            </div>

            <div class="col s6">
                <div class="card white">
                    <form method="post" action="{{ route('settings-page') }}">
                        {{ csrf_field() }}
                    <div class="card-content">
                        <span class="card-title">Change Profile</span>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="name" type="text" class="validate" name="name">
                                    <label for="name">Name</label>
                                </div>

                                <div class="input-field col s12">
                                    <input id="password" type="password" class="validate" name="password">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                    </div>
                    <div class="card-action">
                        <button class="btn purple darker-4" type="submit">Change</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection