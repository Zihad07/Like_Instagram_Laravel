@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card card-body">
                    <div class="card-header">Add New Post</div>
                    <form action="{{route('post.store')}}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="caption" class="col-md-4 col-form-label">Image Caption: </label>


                            <input id="caption"
                                   type="text" class="form-control
                                    @error('caption') is-invalid
                                    @enderror" name="caption" value="{{ old('caption') }}"
                                   autocomplete="caption" autofocus
                                   placeholder="Enter Image Caption">

                            @error('caption')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="image" class="col-md-4 col-form-label">Post Image</label>
                            <input type="file" name="image" id="image" class="form-control-file">
                            @error('image')

                                        <strong>{{ $message }}</strong>

                            @enderror
                        </div>

                        <div class="form-group">
                            <button class="btn btn-sm btn-outline-success float-right" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
