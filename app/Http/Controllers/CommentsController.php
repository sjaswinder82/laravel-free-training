<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request, Post $post) {
        $user = \Auth::user();
        $payload = [
            'user_id' => $user->id,
            'post_id' => $post->id,
            'content' => $request->input('content'),
        ];

        Comment::create($payload);
        return redirect()->route('show.post', $post->id);
    }
}
