@extends('layouts.backend.app')
@section('content')
    <div class="col-md-10">
        <div class="card" style="margin:20px;">
            <div class="card-header">
                <h3 class="card-title">Message Detail</h3>
            </div>
            <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">Message From: {{ $message->name }}</h6>
                <h6 class="card-subtitle mb-2 text-muted">Email: {{ $message->email }}</h6>
                <h6 class="card-subtitle mb-2 text-muted">Subject: {{ $message->subject }}</h6>
                <p class="card-text mb-2">Contact Message: {{ $message->message }}</p>
                <h6 class="card-subtitle mb-2 text-muted">Phone Number: {{ $message->phone }}</h6>
                <h6 class="card-subtitle mb-2 text-muted">Recieved Date: {{ $message->created_at }}</h6>
            </div>
        </div>
    </div>
@endsection
