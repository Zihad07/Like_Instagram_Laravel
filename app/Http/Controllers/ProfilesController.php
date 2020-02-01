<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
//    public function index()
//    {
//        return view('home')->with('profileUser',auth()->user());
//    }

        public function index(User $user) {
//            $user = User::findOrFail($userid);
//            return view('profile.index',['user'=>$user]);
            return view('profile.index',['user' => $user]);
        }

        public function edit(User $user) {
//            dd($user);
            return view('profile.edit',['user'=>$user]);
        }

        public  function update(Request $request) {
//            dd($request->all());

            $data = $request->validate([
                'title' => 'required',
                'description' => 'required',
                'url'=> 'url',
                'image'=>''
            ]);

            auth()->user()->profile()->update($data);

            return redirect(route('profile.show',auth()->user()->id));
        }
}
