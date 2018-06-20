<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tasks = Task::where('user_id', Auth::user()->id)->get();
        return view('home', compact('tasks'));
    }

    public function indexBookmarks()
    {
        $tasks = Task::where('bookmark', true)->where('user_id', Auth::id())->get();
        return view('home', compact('tasks'));
    }


    public function saveBookmarks($task)
    {
        $post = Task::findOrFail($task);
        if ($post->user_id == Auth::id()){
            if (\request('bookmark') == true) {
                $post->bookmark = 0;
            } else {
                $post->bookmark = 1;
            }

            $post->save();
        }

        return redirect()->route('home');
    }

    public function saveColor($task){
        $post = Task::findOrFail($task);
        if ($post->user_id == Auth::id()){
            $post->color = \request('colorpicker');
            $post->save();
        }

        return redirect('/home');
    }

    public function indexcreate(){
        return view('create');
    }

    public function saveTask(){
        $task = new Task();
        if (\request('title') == null || \request('description') == null || \request('color') == null){
            return redirect(route('create-page'));
        }else{
            $task->title = \request('title');
            $task->description = \request('description');
            $task->user_id = Auth::id();
            $task->bookmark = 0;
            $task->color = \request('color');
            $task->save();

            return redirect(route('home'));
        }
    }

    public function finishTask($task){
        $post = Task::findOrFail($task);
        if ($post->user_id == Auth::id()){
            $post->delete();
        }

        return redirect(route('home'));
    }
}
