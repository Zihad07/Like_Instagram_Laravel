@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card card-body">
                    <div class="card-header">Edit Profile</div>
                    <form action="{{route('profile.update',$user->id)}}" enctype="multipart/form-data" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="caption" class="col-md-4 col-form-label">Title </label>


                            <input id="title"
                                   type="text" class="form-control
                                    @error('title') is-invalid
                                    @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}"
                                   autocomplete="title" autofocus
                                   placeholder="Enter Title">

                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="caption" class="col-md-4 col-form-label">Description </label>


                            <input id="description"
                                   type="text" class="form-control
                                    @error('description') is-invalid
                                    @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}"
                                   autocomplete="description" autofocus
                                   placeholder="Enter Profile Description...">

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="caption" class="col-md-4 col-form-label">URL </label>


                            <input id="url"
                                   type="text" class="form-control
                                    @error('url') is-invalid
                                    @enderror" name="url" value="{{ old('url') ?? $user->profile->url}}"
                                   autocomplete="url" autofocus
                                   placeholder="Enter Contact URL..">

                            @error('url')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>


                        <div class="form-group">
                            <label for="image" class="col-md-4 col-form-label">Profile Image</label>
                            <input type="file" name="image" id="image" class="form-control-file">
                            @error('image')

                            <strong>{{ $message }}</strong>

                            @enderror
                        </div>

                        <div class="form-group">
                            <button class="btn btn-sm btn-outline-success float-right" type="submit">Save Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
