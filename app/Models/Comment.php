<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'post_id',
        'content',
    ];

    //Comment belongs to post

    // comment belongs to user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
