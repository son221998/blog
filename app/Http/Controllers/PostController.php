<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\HelperController;
use App\Models\Post;
use App\Models\Author;
use App\Models\Category;

class PostController extends Controller
{        
    //Show all post
    public function index() 
    {
        $posts = Post::with("category")->orderBy('created_at', 'desc')->paginate(10);
        return view('backend.posts.index', compact('posts'));
    }
    public function home() 
    {
        $posts = Post::all();
        $categories = Category::all();
        return view('frontend.home.homepage', compact('posts', 'categories'));
    }
    // Create post
    public function create() 
    {  
        $categories = Category::where('status', true)->get();
        return view('backend.posts.create', compact('categories'));
    }
    
    // Store post
    public function store(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'categories.*' => 'exists:categories',
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); 
        if($validator->fails()) return redirect()->back()->with('error', $validator->errors()->all());

        $posts = new Post;
        $posts -> title = $request->title;
        $posts -> content = $request->content;
        $posts -> category_id = $request->category_id;
        $image =  $request->file("image");
                    
        if($image) {
            $image_path = HelperController::uploadFile($image);
            $posts->image = $image_path;
        }
        $posts->save();
        // request()->image->move(public_path('images'), $file_name);
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');    
    }
    

    // Edit post
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::where('status', true)->get();
        return view('backend.posts.edit', compact('categories', 'post'));
    }

    public function update(Request $request)
    {

        $input = $request->all(); 
        $id = $input['id'];
        $image = $request->file('image');
        $data=[
            'title' => $input ['title'],
            'content' => $input ['content'],
            'category_id' => $input ['category_id']
        ];

        if($image) {
            $image_path = HelperController::uploadFile($image);
            $data += ['image'=> $image_path];
        }

        $post = Post::whereId($id)->update($data);
        if (!$post) {
            return redirect()->back()->with('error', 'Sorry, there\'re a problem while updating category.');
        }

        return redirect()->route('posts.index')->with('flash_message', 'Post Updated!'); 
    }

    // Show post
    public function show($id)
    {       
        $post = Post::whereId($id)->with('category')->first();
        $categories = Category::all();
        return view('frontend.posts.detail', compact('post', 'categories'));
    }

    // View Blog Detail
    public function view($id) 
    {
        $post = Post::find($id);
        return view('backend.posts.detail', compact('post'));
    }

    // Like Count
    public function like(Request $request, $id)
    {
        $postId = $request->input('post_id');
        $posts = Post::whereId($id);
        $like = new Like();
        $like -> post_id = $post->id;
        $like -> save();
        
    // Perform the necessary logic to like the post
    // You can update the likes count in the database or perform any other action you desire

        return redirect()->route('frontend.posts.detail')->with(['success' => true, 'message' => 'Post Liked']);
    }  
    public function destroy(Request $request, $id) 
    {
        $post = Post::find($id);
        //Also delete image from storage
        // if($post->image) {
        //     Storage::delete($post->image);
        // }
        //Check if Post exist 
        if(!$post) {
            return response()->json(['success'=> false,
             'massage' => 'Post not found!']);
        }
        else {
            $post -> delete();
            return response()->json(['success'=> true,
             'message'=> 'Post Deleted!']);
        }
    }
}     
