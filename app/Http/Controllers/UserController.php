<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function  fetch(){
        $users = User::all();
        return view('welcome', [
            'users' => $users
        ] );
    }

    function search(Request $request){
        $users = User::search($request->keyword)->get();
        // print_r($users);
        // return view('welcome', [
        //     'users' => $users
        // ]);
        return response()->json([
            'users' => $users
        ]);
    }
}
