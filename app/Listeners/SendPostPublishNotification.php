<?php

namespace App\Listeners;

use App\Events\UserPostPublished;
use App\Mail\PostPublishedMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendPostPublishNotification
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
        // send a mail to the user about post published.
        Mail::to($event->user)->send(new PostPublishedMail($event->user, $event->post));
    }
}
