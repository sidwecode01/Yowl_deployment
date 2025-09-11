<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use App\Helpers\UrlPreview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class PostController extends Controller
{
    //

    public function index()
    {
        $user = Auth::user();

        $admin = User::where("is_admin" , 1)->get();


        $posts = Post::latest()->get();

        return view('welcome', ['posts' => $posts, 'user' => $user, "admin" =>$admin]);
    }

    public function search(Request $request){
        $search = $request->search;
        $user = Auth::user();

        $posts = Post::where('title', "LIKE", "%$search%" )
        ->orWhere('description', "LIKE", "%$search%")
        ->get();
        return view('searchPost', ['posts' => $posts, 'user' => $user, 'search' => $search]);
    }

    public function userPost($userId){
        $user = Auth::user();
        $posts = Post::where('user_id', $userId)->get();
        return view('userDashboard', ['posts' => $posts, 'user' => $user]);
    }

    public function indexDash()
    {
        $posts = Post::all();
        return view('productDash', compact('posts'));
    }

    /**
     * Display the specified resource.
     */
    public function showDash(string $id)
    {
        $post = Post::find($id);
        return view('productDash', compact('post'));
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

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'url' => 'required|url',
            'title' => 'required|string|max:50',
        ]);



        $post->update($request->all());

        return redirect()->back()->with('success', 'Post created');
    }

    public function delete(Post $post){

        $post->delete();
        return redirect()->back()->with('success', 'Post supprimé avec succès !');
    }

    public function show(Post $post)
{
    // Charge les commentair
    $post->load('comments.user');

    return view('posts.show', compact('post'));
}

public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));

        return redirect()->back()->with('success', 'Post created');

    }


}
