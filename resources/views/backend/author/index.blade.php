@extends('layouts.backend.app')
@section('content')
<!DOCTYPE html>
<html>

<head></head>
<body>
    <div class="col-md-10">
        <div class="row" class="col-12" style="margin:20px;">
            <h1>User</h1>
            <section class="mt-3">
                {{--  <form action="{{ route('message.index') }}" method="POST">  --}}
                    @csrf
                    <div class="row" class="col-6" style="margin:20px;">
                        <div class="row" class="col-6">
                            <div class="row" class="row">
                                <div class="col-12" class="post">
                                    <table class="table">
                                        <thead class="bg-primary text-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($author as $user)
                                                <tr class="contact">
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->phone }}</td>
                                                    <td>
                                                        <a href="{{ route('author.show', $item->id) }}"
                                                            title="View User" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</body>
@endsection
