@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-xl-10">

        @include('partials.success-message')

        <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
            <div>
                <h2 class="fw-bold mb-2">Posts</h2>
                <p class="text-muted mb-0">manage all posts</p>

            </div>
            <a href="{{route('posts.create')}}" class="btn btn-info">
                Create New Post
            </a>
        </div>
        <table class="table table-striped table-hover table-bordered border border-info-subtle">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">content</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td scope="row">{{$post->title}}</td>
                    <td scope="row">{{Str::limit($post->content,30)}}</td>
                    <td class="d-flex">
                        <a href="{{route('posts.show',$post->id)}}" class="btn btn-primary me-2">Show</a>
                        <a href="{{route('posts.edit',$post->id)}}" class="btn btn-warning me-2">Edit</a>
                        <form action="{{route('posts.destroy',$post->id)}}" method="POST" class="m-0">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('are you sure you want to delete this post?')">
                                Delete</button>

                        </form>
                    </td>
                </tr>
                @empty
                <td colspan="5" class="text-center">no post found!</td>
                @endforelse
            </tbody>


        </table>
        <div class="d-flex justify-content-end mt-4">
            {{$posts->links()}}

        </div>
    </div>
    <!-- It always seems impossible until it is done. - Nelson Mandela -->
</div>
@endsection