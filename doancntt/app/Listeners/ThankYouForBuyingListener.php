<?php

namespace App\Listeners;

use App\Events\ThankYouForBuyingEvent;
use App\Mail\ThankYouForBuyingMailer;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class ThankYouForBuyingListener
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
    public function handle(ThankYouForBuyingEvent $event)
    {
        $send_email_to = $event->data['send_email_to'];

        Mail::to($send_email_to)->send(new ThankYouForBuyingMailer($event->data));
    }
}