{{--  @extends('layouts.frontend.app')
@section('content')
<div class="container">
    <div class="row" class="col-6" style="margin:20px;">
        <h1>Contact Us</h1>
        <section class="mt-3">
        @if (session('success'))
            <div>{{ session('success') }}</div>
        @endif

        <form action="{{ route('frontend.contact.submit') }}" method="POST">
            @csrf
            <div class="row" class="col-6" style="margin:20px;">
                <div class="row" class="col-6">
                    <div class="row" class="row">
                        <div class="col-12" class="post">
                            <div class="row" class="col-12">    
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" required>
                            </div>
                            <div class="row" class="col-12">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" required>
                            </div>
                            <div class="row" class="col-12">
                                <label for="subject">Subject</label>
                                <input type="text" name="subject" id="subject" required>
                            </div>
                            <div class="row" class="col-12">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-secondary" style="margin:20px;" type="submit">Submit</button>
        </form>
    </section>
@endsection  --}}
