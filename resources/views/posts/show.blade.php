@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="card card-body">
                    <img src="/storage/{{$post->image}}" height="300" alt="">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="user-caption-details">
                    <div class="d-flex align-items-center pt-2">
                        <div class="pr-3">
                            <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle" style="max-width: 45px">
                        </div>

                        <div>
                            <div class="font-weight-bold">
                                <a href="{{route('profile.show',$post->user->id)}}">
                                    <span class="text-dark">{{$post->user->username}}</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <p>
                        <span class="font-weight-bold">
                            <a href="{{route('profile.show',$post->user->id)}}">
                                <span class="text-dark">{{$post->user->username}}</span>
                            </a>
                        </span> {{$post->caption}}

                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
