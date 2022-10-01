<?php

namespace App\Listeners;

use App\Events\UserPostPublished;
use App\Mail\PostPublishedAdminMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendAdminPostPublishNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\UserPostPublished  $event
     * @return void
     */
    public function handle(UserPostPublished $event)
    { 
          // send a mail to the admin about post published by user
        Mail::to('admin@site.com')->send(new PostPublishedAdminMail($event->user, $event->post));

        // 
    }
}
