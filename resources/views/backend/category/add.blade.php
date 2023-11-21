@extends('layouts.backend.app')
@section('content')
    <div class="col-md-10">
        <div class="row" style="margin:20px;">
            <h1>Add Category</h1>
            <section class="mt-3">
                <form method="POST" action="{{ route('category.save') }}" enctype="multipart/form-data">
                    @csrf
                    <!-- Error message when data is not inputted -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    <a href="{{ url('/category/' . $error->id) }}" title="View Category"><button
                                            class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"
                                                aria-hidden="true"></i></button></a>
                                    <a href="{{ url('/category/' . $item->id . '/edit') }}" title="Edit Category"><button
                                            class="btn btn-success btn-sm"><i class="fa fa-pencil"
                                                aria-hidden="true"></i></button></a>
                                    <form method="POST" action="{{ url('/category' . '/' . $error->id) }}"
                                        accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('GET') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Category"
                                            onclick="return confirm("Confirm Delete?")"><i
                                                class="fa fa-trash-can"aria-hidden="true"></i></button>
                                    </form>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="row" class="col-6" style="margin:20px;">
                        <div class="row" class="col-6">
                            <div class="row" class="row">
                                <div class="col-12" class="post">
                                    <div class="row" class="col-12">
                                        <label for="floatingInput">Title</label>
                                        <input class="form-control" type="text" name="title">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-secondary m-3">Save</button>
                    
                </form>
            </section>
        </div>
    </div>
@endsection
