<!DOCTYPE html>
<html>
<head>
    <title>{{ $post->title }}</title>
</head>
<body>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    <h3>Likes: <span class="likes-count">{{ $post->likes()->count() }}</span></h3>

    <form class="like-form" action="{{ route('posts.like', $post->id) }}" method="POST">
        @csrf
        <button class="like-button" type="submit">Like</button>
    </form>

    <script src="{{ asset('js/like.js') }}"></script>
</body>
</html>