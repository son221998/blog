<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AuthorController;
use App\Models\Author;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index() {

        $author = Author::find($id);
        return view('backend.author.index', compact('author'));
    }
}
