<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Helpers\UrlPreview;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function index()
    {
        $posts = Post::latest()->get();

        return view('welcome', compact('posts'));
    }

     public function store(Request $request)
    {
        $request->validate([
            'url' => 'required|url',
            'title' => 'required|string|max:50',
        ]);

        $meta = UrlPreview::getMetaTags($request->url);

        Post::create([
            'user_id'     => auth()->id(),
            'url'         => $request->url,
            'title'       => $request->title ?? null,
            'description' => $meta['description'] ?? null,
            'image'       => $meta['image'] ?? null,
        ]);

        return redirect()->back()->with('success', 'Post created');
    }


}
