<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    //


        public function userPost($userId){
        $user = Auth::user();
        $posts = Post::where('user_id', $userId)->get();
        return view('userDashboard', ['posts' => $posts, 'user' => $user]);
    }

     public function store(Request $request, Post $post)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        $post->comments()->create([
            'user_id' => auth()->id(),
            'content' => $request->content,
        ]);

        return back()->with('success', 'Comment ajouté');
    }

    public function destroy($id)
    {
         $comment = Comment::findOrFail($id);
        // Vérifier le proprio
        if (auth()->id() === $comment->user_id) {
            $comment->delete();
            return back()->with('success', 'Comment supprim.');
        }

        return back()->with('error', 'Action pas autorise.');
    }
}


