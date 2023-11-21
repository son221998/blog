@extends('layouts.frontend.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card" style="margin:20px;">
                <div class="card-header">
                    <h3 class="card-title">{{ $post->title }}</h3>
                </div>
                <div class="card-body">
                    <img class="post-image" src="{{ asset('storage/' . $post->image) }}" width="20%" height="20%">
                    </td>
                    <p class="card-text">{{ $post->content }}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Author: {{ $post->author }}</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
