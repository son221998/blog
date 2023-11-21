<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Models\Post;
use App\Models\Author;
use App\Models\Category;

class CategoryController extends Controller
{    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {       
        $categories = Category::with("category")->orderBy('created_at', 'desc')->paginate(10);
        return view('backend.category.index', compact('categories'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
        return view('backend.category.add');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
        $category = new Category;
        $category->title = $request->title;
        $category->save();
        return redirect()->route('category.index')->with('success', 'Category created successfully.');
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
    $category = Category::find($id);
    return view('backend.category.detail', compact('category'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit(Category $category, $id)
   {
    $category = Category::find($id);
    return view('backend.category.edit', compact('category'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
       $category = Category::find($id);
       $input = $request->all();
       $category->update($input);
       if (!$category->save()) {
            return redirect()->back()->with('error', 'Sorry, there\'re a problem while updating category.');
        }
       return redirect()->route('category.index')->with('flash_message', 'Category Updated!'); 
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy(Request $request, $id)
   {
        $category = Category::find($id);
        // dd($category);
        //Check if the category exists
        if(!$category) {
            return response()->json(['success' => false, 'message' => 'Category not found!']);
        }
        //Check if the  category has any associated posts
        if(Post::where('category_id', $category->id)->exists()) {
            return response()->json(['success'=> false, 'message' => 'Cannot Delete Category!']);
        }
        else { //Category Delete
            $category -> delete();
            return response()->json(['success'=> true, 'message' => 'Category Deleted!']);
        }  
    }    

    // frontend
    public function getPostByCategory($id, Request $request) {
        $posts = Post::where('category_id', $id)->paginate(10);
        return view('', $posts);
    }
}