<?php

namespace App\Mail;

use App\Models\Post;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PostPublishedAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public $post;
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Post $post)
    {
        $this->user = $user;
        $this->post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('User has published a post.')
                    ->from('jaswinder@test.com', 'Jaswinder')
                    ->markdown('emails.posts.published.admin');
    }
}
