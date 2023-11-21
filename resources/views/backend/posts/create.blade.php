@extends('layouts.backend.app')
@section('content')
<div class="col-md-10">
    <div class="row" class="col-6">
        <h1>Add Post</h1>
        <section class="mt-3">
            <form method="POST" action="{{ route('posts.save') }}" enctype="multipart/form-data">
                @csrf
                    <div class="row col-6 mb-3">
                        <!-- Error message when data is not inputted -->
                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger">
                                @foreach ($message as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div class="col-12" class="post">
                        <div class="row col-6 mb-3">
                            <label for="floatingInput">Category</label>
                            <select class="form-control m-bot15" name="category_id" required>
                                <option> Please Select Category </option>
                                @if ($categories->count() > 0)
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="row col-12 mb-3">
                            <label for="floatingInput">Title</label>
                            <input class="form-control" type="text" name="title" required>
                        </div>
                        <div class="row col-12 mb-3">
                            <label for="floatingTextArea">Content</label>
                            <textarea class="form-control" name="content" required id="floatingTextarea" cols="30" rows="10"></textarea>
                        </div>
                        <div class="row col-12 mb-3">
                            <label for="formFile" class="form-label">Add Image</label>
                            <input class="form-control" type="file" name="image" required>
                        </div>
                    </div>
                </div>
                <button class="btn btn-secondary" style="margin-bottom:20px;">Save</button>
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
