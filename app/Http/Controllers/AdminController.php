<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function register_LH(Request $request){

    $user=new User;
    $user->name = Input::get('name');
    $user->email = Input::get('email');
    $user->password = Hash::make(Input::get('password'));
    $user->save();

    return view ('add-LH');
    }
}
