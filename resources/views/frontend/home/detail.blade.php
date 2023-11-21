@extends('layouts.backend.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card" style="margin:20px;">
                <div class="card-header">
                    <h3 class="card-title">{{ $view->title }}</h3>
                </div>
                <div class="card-body">
                    <img class="post-img" src="{{ asset('storage/' . $view->image) }}">
                    </td>
                    <p class="card-text">{{ $view->content }}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Author: {{ $view->author }}</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


{{--  @extends('layouts.backend.app')
@section('content')
    <div class="container-fluid">
        <div class="card" style="margin:20px;">
            <div class="container-fluid" style="margin: 20px;">
                <div class="titlebar" style="margin: 20px;">
                    <a class="btn btn-success float-end mt-2" href="{{ route('posts.create') }}" role="button">Upload</a>
                </div>
                <h1 class="card-title" style="margin-bottom: 20px;">Welcome to Personal Blog Web</h1>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/1698631653.png" alt="Card image cap" style="margin: 20px;">
                    <div class="card-body">
                        <h5 class="card-title">Dummy Text</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                            dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                            mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis
                            enim. </p>
                        <a href="#" title="Like Post" class="btn btn-primary btn-sm">
                            <i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
        
                        <a href="#" title="View Post" class="btn btn-primary btn-sm">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
        
                    </div>
                </div>
        
            </div>
        </div>
    </div>
@endsection  --}}
