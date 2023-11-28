<?php

namespace App\Providers;

use App\Events\CourierEvent;
use App\Events\ShipmentEvent;
use App\Listeners\CreateCourier;
use App\Listeners\CreateShipment;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ShipmentEvent::class => [
            CreateShipment::class,
        ],
        CourierEvent::class => [
            CreateCourier::class
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
