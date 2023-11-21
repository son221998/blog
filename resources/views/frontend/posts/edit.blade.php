@extends('layouts.frontend.app')
@section('content')
    <div class="container-fluid">
        <div class="row" class="col-6" style="margin:20px;">
            <h1>Edit Post</h1>
            <section class="mt-3">
                <form method="POST" action="{{ route('post.update') }}" enctype="multipart/form-data">
                    @csrf
                    <!-- Error message when data is not inputted -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    <a href="{{ route('post.detail', $error->id) }}" title="View Post"><button
                                            class="btn btn-primary btn-sm">
                                            <i class="fa-regular fa-eye" aria-hidden="true"></i></button>
                                    </a>
                                    <a href="{{ route('post.edit', $item->id . '/edit') }}" title="Edit Post"><button
                                            class="btn btn-success btn-sm">
                                            <i class="fa-regular fa-pencil" aria-hidden="true"></i></button>
                                    </a>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <select class="form-control m-bot15" name="category_id" style="margin:20px;" required"">
                        <option>Please Select Category</option>
                        @if ($categories->count() > 0)
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if ($post->category_id == $category->id) selected @endif>
                                    {{ $category->title }}</option> //compare 2 option
                            @endforeach
                        @endif
                    </select>

                    <div class="row" class="col-6" style="margin:20px;">
                        <div class="row" class="col-6">
                            <div class="row" class="row">
                                <div class="col-12" class="post">
                                    <input type="hidden" name="id" value="{{ $post->id }}">
                                    <div class="row" class="col">
                                        <label for="floatingInput">Title</label>
                                        <input class="form-control" type="text" name="title"
                                            value="{{ $post->title }}">
                                    </div>
                                    <div class="row" class="col-12">
                                        <label for="floatingTextArea">Content</label>
                                        <textarea class="form-control" name="content" value="{{ $post->content }}" id="floatingTextarea" cols="30"
                                            rows="10"></textarea>
                                    </div>
                                    <div class="row" class="col-12">
                                        <label for="formFile" class="form-label">Add Image</label>
                                        <img src="" alt="" class="img-blog" value="{{ $post->image }}">
                                        <input class="form-control" type="file" name="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-secondary" style="margin:20px;">Save</button>
                </form>
            </section>
        </div>
    </div>
@endsection
