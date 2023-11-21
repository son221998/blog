@extends('layouts.frontend.app')
@section('content')
    <div class="container-fluid w-75 post">
        <div class="post-img">
            <img src="{{ asset('storage/' . $post->image) }}" />
        </div>
        <div>
            <h1> {{ $post->title }} </h1> 
            <div class="d-flex align-items-center mt-3">
                <a class='post-category'> {{ $post->category->title }} </a>
                <p class='post-date'> {{ $post->created_at }}</p>
            </div>
        </div>
        <div class="post-content">
            {!!$post->content!!}
        </div>
    </div>
@endsection
