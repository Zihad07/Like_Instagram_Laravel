@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3 p-5">
            <img src="{{$user->profile->profileImage()}}" alt="" class="rounded-circle" height="200px" width="200px">
        </div>

        <div class="col-sm-9 col-md-9 pt-5 pl-5">
{{--            <div><h1>like-Instragram</h1></div>--}}
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <div class="h2">{{$user->username}}</div>

                    <follow-button user-id="{{$user->id}}" follower="{{$follower}}"></follow-button>

                </div>

                @can('update',$user->profile)
                    <a href="{{route('post.create')}}" class="btn btn-sm btn-outline-primary">Add New Post</a>
                @endcan

            </div>
            <div>
                @can('update',$user->profile)
                    <a href="{{route('profile.edit',$user->id)}}" class="btn btn-sm btn-primary">Edit Profile</a>
                @endcan
            </div>
            <div class="d-flex align-items-center pt-3">
                <div class="pr-4"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-4"><strong>{{$user->profile->followers->count()}}</strong> followers</div>
                <div class="pr-4"><strong>{{$user->following->count()}}</strong> following</div>
            </div>

            <div class="pt-4 font-weight-bold">
                {{$user->profile->title}}
            </div>
            <div>
                {{$user->profile->description}}
            </div>
            <div><a href="#">{{$user->profile->url}}</a></div>

        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-sm-4 pb-3">
                <a href="{{route('post.show',$post->id)}}">
                    <img class="w-100" src="/storage/{{$post->image}}" alt="">
                </a>

            </div>
        @endforeach

    </div>
</div>
@endsection
