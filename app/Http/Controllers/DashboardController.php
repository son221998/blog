<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Author;
use App\Models\Contact;
USE Carbon\Carbon;

class DashboardController extends Controller
{
    public function main()
    {
        $postCount = Post::count();
        $categoryCount = Category::count();
        $authorCount = Author::count();
        $messageCount = Contact::whereDate('created_at', Carbon::today())->count();

        return view('backend.dashboard.main', compact('postCount', 'categoryCount', 'authorCount', 'messageCount'));
    }
}
