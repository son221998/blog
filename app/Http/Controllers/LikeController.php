<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LikeController extends Controller
{

    public function likePost(Request $request, Post $post)
    {
        $user = Auth::user();

        // Check if the user has already liked the post
        if (!$post->likes()->where('user_id', $user->id)->exists()) {
            // Create a new Like instance
            $like = new Like();
            $like->user_id = $user->id;
            $post->likes()->save($like);

            return response()->json(['message' => 'Post liked successfully']);
        }

        return response()->json(['message' => 'You have already liked this post'], 422);
    }
}
