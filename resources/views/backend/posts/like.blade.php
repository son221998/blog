@extends('layouts.frontend.app')
@section('content')
    <div class="container-fluid">
        <div class="row" class="col-6" style="margin:20px;">
            <div class="titlebar">
                <a class="btn btn-success float-end mt-3" href="{{ route('posts.create') }}" role="button">Add Post</a>
                {{--  <a class="btn btn-success float-end mt-3" href="{{ route('posts.edit') }}" role="button">Edit Post</a>  --}}
                <h1>Personal Blog Website</h1>
            </div>
            <hr>
            <!-- Message if a post is posted successfully -->
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @if (count($posts) > 0)
                @foreach ($posts as $post)
                    <div class="row" class="col-6" style="margin:20px;">
                        <div class="row" class="col-6">
                            <div class="row" class="row">
                                <div class="col-2" class="post">
                                    <img class="img-fluid" style="max-width:50%;"src="{{ url('/storage/' . $post->image) }}"
                                        alt="">
                                    <a href="{{ route('post.view', $post->id) }}">
                                        <h2>{{ $post->title }}</h2>
                                    </a>
                                    <p>{{ $post->content }}</p>

                                    <form class="like-form" method="POST" action="{{ route('posts.like', $posts->id) }}">
                                        {{ method_field('GET') }}
                                        {{ csrf_field() }}
                                        <button class="like-btn" class="btn btn-success" data-post-id="{{ $post->id }}"
                                            title="LikePost" onclick="return confirm("Post Liked")">Like</button>
                                        <span class="likes-count"{{ $posts->likes()->count() }}>0</span>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
@else
    <p>No Posts found</p>
    @endif
    <script src="{{ asset('js/like.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function myLike() {
            // Add your desired code here
            console.log("Post Liked!");
        }
    </script>
@endsection
