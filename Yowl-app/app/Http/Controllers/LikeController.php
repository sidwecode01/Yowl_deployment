<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    //

     public function like(Post $post)
    {
        $user = Auth::user();

        // Empêcher les doublons
        if (!$user->likedPosts->contains($post->id)) {
            $user->likedPosts()->attach($post->id);
        }

        return back();
    }

    public function unlike(Post $post)
    {
        $user = Auth::user();

        $user->likedPosts()->detach($post->id);

        return back();
    }
}







