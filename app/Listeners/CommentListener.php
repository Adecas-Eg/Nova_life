<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\CommentNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class CommentListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle($event): void
    {
        $user = User::find($event->comment->casa->user_id);
        Notification::send($user,new CommentNotification($event->comment));

    }
}
