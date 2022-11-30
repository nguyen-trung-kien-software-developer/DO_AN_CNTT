<?php

namespace App\Listeners;

use App\Events\CustomerContactEvent;
use App\Mail\CustomerContactMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class CustomerContactListener
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
     * @param  object  $event
     * @return void
     */
    public function handle(CustomerContactEvent $event)
    {
        $send_email_to = $event->data['send_email_to'];

        Mail::to($send_email_to)->send(new CustomerContactMail($event->data));
    }
}