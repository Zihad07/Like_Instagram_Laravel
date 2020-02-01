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
                {{$post->caption}}
            </div>
        </div>
    </div>
@endsection
