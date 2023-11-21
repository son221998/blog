@extends('layouts.backend.app')
@section('content')
<div class="col-md-10">
    <div class="row" style="margin:20px;">
        <div class="card-body">
            <div class="card">
                <div class="card-body">
                    <div class="titlebar">
                        <a class="btn btn-success float-end mt-2" href="{{ route('category.add') }}" role="button">Add
                            Category</a>
                        <h1>Category</h1>
                    </div>
                    <hr>
                    <!-- Message if a Category is create successfully -->
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="bg-primary text-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr class="category">
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->title }}</td>
                                            <td>@if($category->status) Active @else Not Active @endif</td>
                                            {{--  <td>{{ $category->links() }}</td>  --}}
                                            <td>
                                                <a href="{{ route('category.detail', $category->id) }}"
                                                    title="View Category" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-eye"aria-hidden="true"></i>
                                                </a>
                                                <a href="{{ route('category.edit', $category->id) }}"
                                                    title="Edit Category" class="btn btn-success btn-sm">
                                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                                </a>
                                                <a class="btn btn-danger btn-delete btn-sm" href="javascript:void(0);"
                                                    data-url="{{ route('category.delete', $category->id) }}">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <span>{{$categories->links()}}</span>
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
                if (!confirm('Are you sure ?')) return false;

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
