@extends('layouts.backend.app')
@section('content')
    <div class="col-md-10">
        <div class="card" class="row"  style="margin:20px;">
            <div class="card-header">
                <h3>Edit Category</h3>
            </div>
            <section class="mt-3">
                <form method="POST" action="{{ route('category.update', $category->id) }}" enctype="multipart/form-data">
                    @csrf
                    <!-- Error message when data is not inputted -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    <a href="{{ route('category.detail', $error->id) }}" 
                                        title="View Category"><button
                                            class="btn btn-primary btn-sm">
                                            <i class="fa-regular fa-eye" aria-hidden="true"></i></button>
                                    </a>
                                    <a href="{{ route('category.edit', $item->id . '/edit') }}"
                                        title="Edit Category"><button class="btn btn-success btn-sm">
                                            <i class="fa-regular fa-pencil" aria-hidden="true"></i></button>
                                    </a>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="row" class="col-6" style="margin:20px;">
                        <div class="row" class="col-6">
                            <div class="row" class="row">
                                <div class="col-12" class="post">
                                    <div class="row" class="col">
                                        <label for="floatingInput">Title</label>
                                        <input class="form-control" type="text" name="title"
                                            value="{{ $category->title }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-secondary m-3">Save</button>
                    <input type="checkbox" name="" id="active" @if($category->status) Acitve @else Not Active @endif>Active
                </form>
            </section>
        </div>
    </div>
@endsection
