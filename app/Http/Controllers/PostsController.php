<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(CreatePostRequest $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        $post = new Post();
        $post->title = $title;
        $post->content = $content;

        $post->save();

        return 'Post Created Successfully';
    }

    public function index()
    {
        // fetch all posts from posts table
        $posts = Post::paginate(5);
        return view('posts.index', compact('posts'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->only('title', 'content'));
        
        $request->session()->flash('status', 'Post Updated successfully.');

        return redirect()->route('posts.index');
    }
}
