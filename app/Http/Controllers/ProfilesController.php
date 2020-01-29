<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
//    public function index()
//    {
//        return view('home')->with('profileUser',auth()->user());
//    }

        public function index($userid) {
            $user = User::findOrFail($userid);
            return view('home',['user'=>$user]);
        }
}
