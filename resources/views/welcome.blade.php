@extends('layouts.app')
@section('content')
    <nav>
        <div class="nav-wrapper purple darken-4">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            </ul>
        </div>
    </nav>
    <div class="center_custom">
        <h1 class="title_site">Secure Task Viewer</h1>
    </div>
    @include('components.footer')
@endsection