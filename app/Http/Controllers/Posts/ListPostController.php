<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ListPostController extends Controller
{
    public function __invoke(Request $request)
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);

        return view('home', compact('posts'));
    }
}
