@extends('layouts.backend.app')
@section('content')
<div class="col-md-9">
    <div class="row">
        <title>Dashboard</title>
            <h2>Dashboard:</h2>              
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fa fa-clipboard" aria-hidden="true"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Post</span>
                    <span class="info-box-number">
                        {{ $postCount }}
                        <small></small>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-th-large" aria-hidden="true"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Category</span>
                    <span class="info-box-number">
                        {{ $categoryCount }}
                        <small></small>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-success elevation-1"><i class="fa fa-user "></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total User</span>
                    <span class="info-box-number">
                        {{ $authorCount }}
                        <small></small>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Messagse</span>
                    <span class="info-box-number">
                        {{ $messageCount }}
                        <small></small>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
