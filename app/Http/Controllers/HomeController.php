<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Http\Controllers\HomeController;

class HomeController extends Controller
{
    public function homepage() {
        $posts = Post::paginate(10);
        $categories = Category::all();
        return view('frontend.home.homepage', compact('posts','categories'));
    }
}
