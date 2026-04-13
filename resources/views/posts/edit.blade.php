@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="text-dark-emphasis m-0 mb-1">edit post</h2>
                    <p class="text-muted m-0">update post details</p>
                </div>

                <a href="{{route('posts.index')}}" class="btn-btn-warning">
                    back to posts
                </a>

            </div>
            <div class="card">
                <div class="card-body p-4">
                    <form action="{{route('posts.update',$post->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="title" class="form-label">
                                Title </label>
                            <input type="text"
                                name="title"
                                id="title"
                                class="form-control @error('title') is-invalid @enderror"
                                value="{{old('title',$post->title)}}"
                                placeholder="enter a descriptive title"
                                autofocus>
                            @error('title')
                            <span class="invalid feedback">{{$message}}</span>
                            @enderror

                        </div>
                        <div class="mb-4">
                            <label for="content" class="form-label">Content</label>
                            <textarea id="content"
                                name="content"
                                class="form-control @error('content') is-invalid @enderror"
                                rows="8"
                                placeholder="write your content here...">{{old('content',$post->content)}}</textarea>
                            @error('content')
                            <span class="invalid feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-info" type="submit">
                                save changes
                            </button>

                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection