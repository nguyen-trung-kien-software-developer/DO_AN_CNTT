<?php

namespace App\Providers;

use App\Events\CustomerContactEvent;
use App\Events\CustomerSendRequestConsultantEvent;
use App\Events\ResponseConsultantEmailEvent;
use App\Events\ThankYouForBuyingEvent;
use App\Listeners\CustomerContactListener;
use App\Listeners\CustomerSendRequestConsultantListener;
use App\Listeners\ResponseConsultantEmailListener;
use App\Listeners\ThankYouForBuyingListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        CustomerSendRequestConsultantEvent::class => [
            CustomerSendRequestConsultantListener::class,
        ],
        CustomerContactEvent::class => [
            CustomerContactListener::class,
        ],
        ThankYouForBuyingEvent::class => [
            ThankYouForBuyingListener::class,
        ],
        ResponseConsultantEmailEvent::class => [
            ResponseConsultantEmailListener::class,
        ],
        'Illuminate\Auth\Events\Verified' => [
            'App\Listeners\LogVerifiedUser',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen(
            CustomerSendRequestConsultantEvent::class,
            [CustomerSendRequestConsultantListener::class, 'handle']
        );

        Event::listen(
            CustomerContactEvent::class,
            [CustomerContactListener::class, 'handle']
        );

        Event::listen(
            ThankYouForBuyingEvent::class,
            [ThankYouForBuyingListener::class, 'handle']
        );

        Event::listen(
            ResponseConsultantEmailEvent::class,
            [ResponseConsultantEmailListener::class, 'handle']
        );
    }
}