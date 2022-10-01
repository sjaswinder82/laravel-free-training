<?php

namespace App\Http\Controllers;

use App\Events\UserPostPublished;
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
        $user = \Auth::user();
        $title = $request->input('title');
        $content = $request->input('content');

        $post = new Post();
        $post->user_id = $user->id;
        $post->title = $title;
        $post->content = $content;

        $post->save();

        // call a funtion that does all work required at time of post publish
        event(new UserPostPublished($user, $post));

        return 'Post Created Successfully';
    }

    public function index()
    {
        $user = \Auth::user();
        // fetch all posts from posts table
        $posts = Post::where('id', '=', $user->id)->paginate(5);
        
        return view('posts.index', compact('posts', 'user'));
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
