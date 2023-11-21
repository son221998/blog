@extends('layouts.frontend.app')
@section('content')
    <div class="container-fluid">
        <div class="row" class="col-12" style="margin:20px;">
            <div class="card-body">
                <div class="card">
                    <div class="col-12" <div class="card">
                        <div class="card-body">
                            <div class="titlebar">
                                <a class="btn btn-success float-end mt-2" href="{{ route('posts.create') }}"
                                    role="button">Add Post</a>
                                <h1>Personal Blog Website</h1>
                            </div>
                            <hr>
                            <!-- Message if a post is created successfully -->
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            @if (count($posts) > 0)
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-primary text-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Category</th>
                                                <th>Title</th>
                                                <th>Content</th>
                                                <th>Image</th>
                                                <th>Like</th>
                                                <th>Active</th>
                                                <th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($posts as $post)
                                                <tr class="posts">
                                                    <td>{{ $post->id }}</td>
                                                    <td>{{ $post->category ? $post->category->title : 'No Category' }}</td>
                                                    <td>{{ $post->title }}</td>
                                                    <td>{{ substr($post->content,0,60); }}</td>
                                                    {{dd($post->content)}}
                                                    <td>{{ $post->image }}</td>
                                                    <td>{{ $post->like_count }}</td>
                                                    <td>{{ $post->active ? 'Active' : 'Not Active' }}</td>
                                                    <td>
                                                        <a href="{{ url('/post/' . $post->id) }}" title="View Post"
                                                            class="btn btn-primary btn-sm">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>

                                                        <a href="{{ route('post.edit', $post->id) }}" title="Edit Category"
                                                            class="btn btn-success btn-sm">
                                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                                        </a>

                                                        <a href="javascript:void(0);"
                                                            class="btn btn-danger btn-delete btn-sm"
                                                            title=" Delete Category"
                                                            data-url="{{ route('post.delete', $post->id) }}">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@push('bottom')
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('click', ".btn-delete", function() {
                let url = $(this).data('url');
                if (!confirm('Are you Sure ?')) return false;

                $.get(url, function(res) {
                    console.log(res);
                    if (res.success) {
                        alert(res.message);
                        location.reload();
                    } else {
                        alert(res.message);
                    }
                });
            });
        });
    </script>
@endpush
