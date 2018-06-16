@extends('layouts.app')

@section('content')
    @include('components.sidebar')
    <div class="body_container">

        <div class="container">
            <ul class="collapsible popout">
                    @forelse($tasks as $task)
                        <li>
                            <div class="collapsible-header" style="box-shadow: 0 2px 5px 0 {{$task->color}}">
                                <form method="post" action="{{ route('bookmark-task', $task->id) }}">
                                    {{ method_field('PATCH') }}
                                    {{ csrf_field() }}
                                    <input name="bookmark" type="hidden" value="{{ $task->bookmark }}">
                                    <button class="transparent-custom" type="submit"><i class="material-icons">@if($task->bookmark == 0) bookmark_border @else bookmark @endif</i></button>
                                </form>
                                <form method="post" action="{{ route('finish-task', $task->id) }}">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button class="transparent-custom" type="submit"><i class="material-icons">done</i></button>
                                </form>
                                <form method="post" action="/color/{{$task->id}}" id="form{{$task->id}}">
                                    {{ method_field('PATCH') }}
                                    {{ csrf_field() }}
                                    <input class="color_picker_custom" value="{{ $task->color }}" type="color" name="colorpicker" onchange="document.querySelector('#form{{$task->id}}').submit()">
                                </form>
                                {{ $task->title }}
                            </div>
                            <div class="collapsible-body"><span>{{ $task->description }}</span></div>
                        </li>
                        @empty
                    <H3 class="center">No Tasks yet</H3>
                    @endforelse
            </ul>
        </div>
    </div>
    @include('components.actionbutton')
@endsection
