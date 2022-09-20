<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ShowPostController extends Controller
{
    public function __invoke(Post $post) 
    {        
        return view('show', compact('post'));
    }
}
