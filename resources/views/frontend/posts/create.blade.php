@extends('layouts.frontend.app')
@section('content')
    <!DOCTYPE html>
    <html>

    <head>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row" class="col-6" style="margin:20px;">
                <h1>Add Post</h1>
                <section class="mt-3">
                    <form method="post" action="{{ route('/home') }}" enctype="multipart/form-data">
                        @csrf
                        <!-- Error message when data is not inputted -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <select class="form-control m-bot15" name="category_id" style="margin:20px;" required"">
                            <option>Please Select Category</option>
                            @if ($categories->count() > 0)
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            @endif
                        </select>

                        <div class="row" class="col-6" style="margin:20px;">
                            <div class="row" class="col-6">
                                <div class="row" class="row">
                                    <div class="col-12" class="post">
                                        <div class="row" class="col-12">
                                            <label for="floatingInput">Title</label>
                                            <input class="form-control" type="text" name="title" required>
                                        </div>
                                        <div class="row" class="col-12">
                                            <label for="floatingTextArea">Content</label>
                                            <textarea class="form-control" name="content" required id="floatingTextarea" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="row" class="col-12">
                                            <label for="formFile" class="form-label">Add Image</label>
                                            <img src="" alt="" class="img-blog">
                                            <input class="form-control" type="file" name="image" required>
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
    </body>

    </html>
@endsection
