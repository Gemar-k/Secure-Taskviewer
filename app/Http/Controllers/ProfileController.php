<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        return view('settings.settings');
    }

    public function save(){
        $password = \request('password');
        $username = \request("name");

        if ($password == null || strlen($password) < 6 || $username == null){
            return redirect(route('settings-page'));
        }else{
            $user = User::findorfail(Auth::id());
            $user->name = $username;
            $user->password = bcrypt($password);
            $user->save();

            return redirect(route('settings-page'));
        }
    }
}
