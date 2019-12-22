@extends('layouts.app')

@section('content')
<div class="container">
<form action="/profile/{{ $user->id }}" enctype='multipart/form-data' method="post">
        @csrf
        @method('PATCH')
        <div class="row pt-4">
            <div class="col-8 offset-2">
                
                <h2>Edit Profile</h2>
         </div>
         </div>
        <div class="row">
            <div class="col-8 offset-2">
                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label ">{{ __('Post title') }}</label>
                            <input id="title" 
                                   type="text" 
                                   class="form-control @error('title') is-invalid @enderror"
                                   name="title" 
                                   value="{{ old('title') }}"
                                   autocomplete="title" autofocus>
    
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
            </div>
        
            <div class="row">
                <div class="col-8 offset-2">
                        <div class="form-group row">
                            <label for="url" class="col-md-4 col-form-label ">{{ __('Post url') }}</label>
                                <input id="url" 
                                       type="text" 
                                       class="form-control @error('url') is-invalid @enderror"
                                       name="url" 
                                       value="{{ old('url') }}"
                                       autocomplete="url" autofocus>
        
                                @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
        
                </div>
            
        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label ">Post Image</label>
                    <input id="image" 
                            name='image'
                            type="file" 
                            class="form-control-file">
    
                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>
          </div>
        
        <div class="row ">
            <div class="col-8 offset-2">
            <button class="btn btn-primary">Add New Post</button>
            </div>
        </div>
    
    </form>
</div>
@endsection
