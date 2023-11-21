@extends('layouts.backend.app')
@section('content')
    <div class="col-md-10">
        <div class="row" class="col-12" style="margin:20px;">
            <h1>User Detail</h1>
            <p>Name: {{ $user->name }}</p>
            <p>Email: {{ $user->email }}</p>
        </div>
    </div>
@endsection
