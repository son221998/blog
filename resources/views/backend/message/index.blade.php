@extends('layouts.backend.app')
@section('content')
    <div class="col-md-10">
        <div class="card" style="margin:20px;">
            <div class="card-header">
                <h1>Contact Messages</h1>
            </div>
                <form action="{{ route('backend.message.index') }}" method="POST">
                    @csrf
                    <div class="col-12" style="margin-top:10px;">
                        <div class="row">
                                <div class="post">
                                    <table class="table">
                                        <thead class="bg-primary text-light">
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th>Reveiced Date</th>
                                                <th></th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($message as $item)
                                                <tr class="message">
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->subject }}</td>
                                                    <td>{{ $item->message }}</td>
                                                    <td>{{ $item->created_at }}</td>
                                                    <td></td>
                                                    <td>
                                                        <a href="{{ route('message.show', $item->id) }}"
                                                            title="View Contact" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <span>{{ $message->links() }} </span>
                                </div>
                        </div>
                    </div>
                </form>
        </div>
    </div>
@endsection

