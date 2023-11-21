@extends('layouts.backend.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Message Detail</h5>
        </div>
        <div class="card-body">
            <h6 class="card-subtitle mb-2 text-muted">From: {{$message->sender}}</h6>
            <p class="card-text">{{$message->content}}</p>
        </div>
        <div class="card-footer">
            <a href="#" class="card-link">Reply</a>
            <a href="#" class="card-link">Delete</a>
        </div>
    </div>
</div>
@endsection