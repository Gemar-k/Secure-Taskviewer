@extends('layouts.app')

@section('content')
    @include('components.sidebar')
    <div class="body_container">
        <div class="row">
            <div class="col s6 offset-s3">
                <div class="card white">
                    <form method="post" action="{{ route('create-page') }}">
                        {{ csrf_field() }}
                        <div class="card-content">
                            <span class="card-title">Create Task</span>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="title" type="text" class="validate" name="title">
                                    <label for="title">Title</label>
                                </div>

                                <div class="input-field col s12">
                                    <input id="description" type="text" class="validate" name="description">
                                    <label for="description">Description</label>
                                </div>

                                <div class="input-field col s12">
                                    <input type="color" name="color" id="color">
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="btn purple darker-4" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection