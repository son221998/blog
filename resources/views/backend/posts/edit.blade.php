@extends('layouts.backend.app')
@section('content')
        <div class="col-md-10">
            <div class="row" class="col-6">
                <h1>Edit Post</h1>
                <section class="mt-3">
                    <form method="POST" action="{{ route('post.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row" class="col-6">
                            <!-- Error message when data is not inputted -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                        <a href="{{ route('post.detail', $error->id) }}" title="View Post"><button
                                                class="btn btn-primary btn-sm">
                                                <i class="fa-regular fa-eye" aria-hidden="true"></i></button>
                                        </a>
                                        <a href="{{ route('post.edit', $item->id . '/edit/{id}') }}"
                                            title="Edit Post"><button class="btn btn-success btn-sm">
                                                <i class="fa-regular fa-pencil" aria-hidden="true"></i></button>
                                        </a>
                                    @endforeach
                                </div>
                            @endif
                            <div class="col-12" class="post">
                                <div class="row col-6 mb-3">
                                    <label for="floatingInput">Category</label>
                                    <select class="form-control m-bot15" name="category_id" required>
                                        <option>Please Select Category</option>
                                        @if ($categories->count() > 0)
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    @if ($post->category_id == $category->id) selected @endif>
                                                    {{ $category->title }}</option> //compare 2 option
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="row col-12 mb-3">
                                    <input type="hidden" name="id" value="{{ $post->id }}">
                                    <div class="row" class="col">
                                        <label for="floatingInput">Title</label>
                                        <input class="form-control" type="text" name="title"
                                            value="{{ $post->title }}">
                                    </div>
                                    <div class="row col-12 mb-3">
                                        <label for="floatingTextArea">Content</label>
                                        <textarea class="form-control" name="content" id="floatingTextarea" rows="5">{{ $post->content }}</textarea>
                                    </div>
                                    <div class="row col-12 mb-3">

                                        <input type="checkbox" name="" id="active" @if($post->status) Acitve @else Not Active @endif>Active
                                    </div>

                                    <div class="row col-12 mb-3">
                                        <label for="formFile" class="form-label" style="margin-top:20px;">Change
                                            Image</label>
                                        <input id="input-file" class="form-control" type="file" name="image">
                                        <div class="card" style="width: 18rem; margin: 2em;">
                                            <img class="post-img" id="img"
                                                src="{{ asset('storage/' . $post->image) }}" width="100%" height="100%">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-secondary" style="margin-bottom:20px;">Save</button>

                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
@endsection
@push('bottom')
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('change', "#input-file", function() {
                var image = document.getElementById("img");
                image.src = URL.createObjectURL(event.target.files[0]);
                file = event.target.files[0];
            });
        });
    </script>
@endpush
