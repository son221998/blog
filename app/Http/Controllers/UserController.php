<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Author;

class UserController extends Controller
{
    public function index() {
        return view('frontend.users.register');
    }

    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'min:5'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'phone' => ['required', 'numeric'],
            'password' => ['required', 'confirmed', 'min:8']
        ]);
        if($validator->fails()) return redirect()->back()->with('error', $validator->errors()->all());
 
        //Hash Password
        $data = [];
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['password'] = bcrypt($request['password']);
        //Create User
        $user = Author::create($data);
        //Login
        // auth()->login($user);
        return redirect()->route('frontend.users.login')->with('message', 'Register successfully. Please log in!');
    }

    //Show Login Form

    public function login() {
        return view('frontend.users.login');
    }

    public function authentication(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:8']
        ]);
        if($validator->fails()) return redirect()->back()->with('error', $validator->errors()->all());
    }
}
