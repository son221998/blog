@extends('layouts.frontend.app')
@section('content')
@include('frontend.slideshow')
<div class="container-fluid">
    <div class="row">
        @foreach ($posts as $post)
            <div class="col">
                <div class="card" style="width: 18rem; margin: 2em;">
                    <img class="post-image" src="{{ asset('storage/' . $post->image) }}">
                    <div class="card-body">
                        <a href="{{ route('frontend.posts.detail', $post->id) }}" title="View Post"
                        <h5 class="card-title"> {{ $post->title }}</h5>
                        </a>
                        <p class="card-text"> {{ substr($post->content,0,80); }} </p>
                        <a href="#" title="Like Post" class="btn btn-primary btn-sm">
                            <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                        </a>
                        <a href="" title="View Post" class="btn btn-primary btn-sm">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
