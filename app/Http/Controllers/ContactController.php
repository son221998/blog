<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ContactController;
use Validator;
use App\Models\Contact;
use App\Models\Category;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('frontend.contact.submit', compact('categories'));
    }

    public function create() 
    {
        $message = Contact::all();
        return view('frontend.contact.submit');
    }

    public function list(Request $request)
    {
        $message = Contact::all();
        $message = Contact::orderBy('created_at', 'desc')->paginate(5);
        return view('backend.message.index', compact('message'));
        
    }

    // Show Contact Detail

    public function show($id)
    {
        $message = Contact::find($id);
        return view('backend.message.detail', compact('message'));
    }

    // View Contact Detail
    public function view($id) {

        $show = Contact::whereId($id)->first();
        return view('backend.message.detail', compact('show'));
    }


    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        if($validator->fails())

        $data = [];
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['subject'] = $request->subject;
        $data['message'] = $request->message;
        $data['received_at'] = now();
        Contact::create($data);
        return redirect()->back()->with('success', 'Message sent!');
    }

}
