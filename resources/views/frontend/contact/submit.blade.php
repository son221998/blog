@extends('layouts.frontend.app')
@section('content')
<div class="contact">
    <div class="contact-wrapper">
        <div class="form">
            <div id="mw_wp_form_mw-wp-form-58" class="mw_wp_form mw_wp_form_input">
                <h1>Contact Us</h1>
                @if ($message = Session::get('success'))
                    <div class="alert alert-primary">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <form method="POST" enctype="multipart/form-data" action="{{ route('frontend.contact.submit') }}">
                    @csrf
                        <table>
                            <tbody >
                                <tr>
                                    <th>Name
                                        <label for="name"></label>
                                    <td>
                                        <input type="text" class="form-control" name="name" id="name"size="60" value
                                            placeholder="Your Name" required>
                                    </td>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <label for="email"></label>
                                    <td>
                                        <input type="email"class="form-control" name="email" id="email" size="60" value
                                            placeholder="Your E-mail Address" required>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Subject</th>
                                    <label for="subject"></label>
                                    <td>
                                        <input type="text" class="form-control" name="subject" id="subject" size="60" value
                                            placeholder="Subject" required>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Message</th>
                                    <label for="message"></label>
                                    <td>
                                        <textarea name="message" id="message" size="60" value
                                            placeholder="Message" required></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                    <div class="btn_submit">
                        <input value="send" style="margin:20px;" name="submit" type="submit">
                    </div>
                    <input type="hidden" name="mw-wp-form-form-id" value="58">
                    <input type="hidden" name="mw_wp_form_token"
                        value="efa5debebc6fd71cc4989afcb1b98ca673ab609a6553b25ea0f10fa5a0d829d0">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
