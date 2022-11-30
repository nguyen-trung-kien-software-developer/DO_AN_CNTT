<?php

namespace App\Listeners;

use App\Mail\ResponseConsultantEmailMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class ResponseConsultantEmailListener
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
    public function handle($event)
    {
        $send_email_to_many_people = $event->data['send_email_to_many_people'];

        foreach ($send_email_to_many_people as $send_email_to) {
            set_time_limit(250);

            Mail::to($send_email_to)->send(new ResponseConsultantEmailMail($event->data));
        }
    }
}