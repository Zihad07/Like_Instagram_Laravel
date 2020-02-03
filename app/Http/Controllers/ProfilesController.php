<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth')->except('index');
//    }
//    public function index()
//    {
//        return view('home')->with('profileUser',auth()->user());
//    }

        public function index(User $user) {
//            $user = User::findOrFail($userid);
//            return view('profile.index',['user'=>$user]);
            $follower = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
//            dd($follower);
            return view('profile.index',['user' => $user, 'follower'=>$follower]);
        }

        public function edit(User $user) {
//            dd($user);
            $this->authorize('update',$user->profile);
            return view('profile.edit',['user'=>$user]);
        }

        public  function update(User $user, Request $request) {
//            dd($request->all());
            $this->authorize('update',$user->profile);

            $data = $request->validate([
                'title' => 'required',
                'description' => 'required',
                'url'=> 'url',
                'image'=>''
            ]);

            if($request->hasFile('image')){
                $imagePath = $request->file('image')->store('profile','public');
                $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
                $image->save();
                $imageArray = ['image'=>$imagePath];
            }

//
//            dd( array_merge(
//                $data,
//                $imageArray ?? []
//            ));

            auth()->user()->profile()->update(
                array_merge(
                    $data,
                    $imageArray ?? []
                )
            );

            return redirect(route('profile.show',auth()->user()->id));
        }
}
