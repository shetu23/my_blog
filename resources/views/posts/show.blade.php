@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="text-dark-emphasis m-0 mb-1">view post</h2>
                    <p class="text-muted m-0">post details</p>
                </div>
                <a href="{{route('posts.index')}}" class="btn-btn-warning">
                    back to posts
                </a>

            </div>
            <div class="card">
                <div class="card-body p-4">
                    <div class="mb-4 pb-3 border-bottom" style="border-color:darkslategrey !important;">
                        <label class="text-muted text-uppercase small mb-2" style="font-size:0.75rem;letter-spacing:0.5px;">Title</label>
                        <h3 class="text-dark-emphasis m-0">{{$post->title}}</h3>

                    </div>

                    <div class="mb-4">
                        <label class="text-muted text-uppercase small mb-2" style="font-size:0.75rem; letter-spacing:0.5px;">Content</label>
                        <p class="text-dark-emphasis mb-0" style="line-height:1.7; white-space:pre-wrap;">{{$post->content}}</p>
                    </div>
                    <div class="pt-3 border-top" style="border-color:darkslategrey !important;">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <small class="text-muted d-block">Created</small>
                                <small class="text-dark-emphasis">
                                    {{$post->created_at->diffForHumans()}}
                                </small>
                            </div>
                            <div class="col-md-6">
                                <small class="text-muted d-block">Last Updated</small>
                                <small class="text-dark-emphasis">
                                    {{$post->updated_at->diffForHumans()}}
                                </small>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>

</div>