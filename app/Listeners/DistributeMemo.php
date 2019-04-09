<?php

namespace App\Listeners;

use App\MemoService;
use App\Events\ActivateMemo;

class DistributeMemo
{
    /**
     * @var MemoService
     */
    protected $memoService;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(MemoService $service)
    {
        $this->memoService = $service;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(ActivateMemo $event)
    {
        $this->memoService->distributeMemo($event->memo);
    }
}
