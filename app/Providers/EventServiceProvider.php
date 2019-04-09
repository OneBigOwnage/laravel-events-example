<?php

namespace App\Providers;

use App\Events\ActivateMemo;
use App\Listeners\SetMemoActive;
use App\Listeners\DistributeMemo;
use App\Listeners\NotifyFleetOwner;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        ActivateMemo::class => [
            SetMemoActive::class   ,
            NotifyFleetOwner::class,
            DistributeMemo::class  ,
        ]
    ];
}
