@extends('layouts.backend.app')
@section('content')
        <div class="col-md-10">
            <div class="row">
                <div class="col">
                    <div class="card" style="margin:20px;">
                        <div class="card-header">
                            <h3 class="card-title">{{ $post->id}}</h3>
                        </div>
                        <div class="card-body">
                            <img class="post-img" src="{{ asset('storage/' . $post->image) }}" width="250" height="250">
                            </td>
                            <p class="card-text">{{ $post->content}}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Author: <small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
