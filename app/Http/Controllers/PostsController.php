<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {

        $data = $request->validate([
            'caption' => 'required',
            'image' => ['required','image']
        ]);
//        dd($data);
//        Post::create($data);
//        dd($request->file('image')->store('uploads','public'));
//        auth()->user()->posts()->create($data);
//        dd(\request()->method());
//        dd($request->all());

         $imagePath = $request->file('image')->store('uploads','public');

//         image fit 1200*1200
         $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
         $image->save();

         auth()->user()->posts()->create([
             'caption' => $data['caption'],
             'image' => $imagePath
         ]);

         return redirect("/profile/".auth()->user()->id);


    }
}
