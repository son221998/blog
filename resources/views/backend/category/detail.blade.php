@extends('layouts.backend.app')
@section('content')
    <div class="col-md-10">
        <div class="card" class="row" style="margin:20px;">
            <div class="card-header">
                <h3 class="card-title">Category Detail</h3>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-id">{{ $category->id }}</h5>
                    <h5 class="card-title">{{ $category->title }}</h5>
                    <p class="card-text">{{ $category->status }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
