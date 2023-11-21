{{--  @extends('layouts.frontend.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>POST</title>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col">
                        <div class="card" style="width: 18rem; margin: 2em;">
                            <img class="post-img" src="{{ asset('storage/' . $post->image) }}"
                                width="250" height="250" style="margin: 17px;">
                            <div class="card-body">
                                <a href="{{ url('post.detail', $post->id) }}" title="View Post"
                                <h5 class="card-title"> {{ $post->title }}</h5>
                                </a>
                                <p class="card-text"> {{ $post->content }} </p>
                                <a href="#" title="Like Post" class="btn btn-primary btn-sm">
                                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                </a>
                                <a href="#" title="View Post" class="btn btn-primary btn-sm">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </body>

    </html>
@endsection  --}}
