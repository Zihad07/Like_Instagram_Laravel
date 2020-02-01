@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3 p-5">
            <img src="https://images.unsplash.com/photo-1505322747495-6afdd3b70760?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80g" alt="" class="rounded-circle" height="200px" width="200px">
        </div>

        <div class="col-sm-9 col-md-9 pt-5 pl-5">
{{--            <div><h1>like-Instragram</h1></div>--}}
            <div class="d-flex justify-content-between align-items-center">
                <h1>{{$user->username}}</h1>
                <a href="{{route('post.create')}}" class="btn btn-sm btn-outline-primary">Add New Post</a>
            </div>
            <div class="d-flex align-items-center">
                <div class="pr-4"><strong>122</strong> posts</div>
                <div class="pr-4"><strong>122</strong> followers</div>
                <div class="pr-4"><strong>122</strong> following</div>
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
        <div class="col-sm-4">
            <img class="w-100" src="https://images.unsplash.com/photo-1432888622747-4eb9a8efeb07?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=753&q=80" alt="">
        </div>
        <div class="col-sm-4">
            <img class="w-100" src="https://images.unsplash.com/photo-1512486130939-2c4f79935e4f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" alt="">

        </div>
        <div class="col-sm-4">
            <img class="w-100" src="https://images.unsplash.com/photo-1432888622747-4eb9a8efeb07?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=753&q=80" alt="">

        </div>
    </div>
</div>
@endsection
