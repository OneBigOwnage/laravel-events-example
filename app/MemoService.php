<?php

namespace App;

class MemoService
{
    /**
     * @var OccupationService
     */
    protected $occupationService;

    /**
     * Create a new instance of the service.
     * This service requires an instance of the OccupationService to work.
     *
     * @param  OccupationService $service The crew occupation service.
     *
     * @return void
     */
    public function __construct(OccupationService $service)
    {
        $this->occupationService = $service;
    }

    /**
     * Set the given memo to active.
     *
     * @param  Memo $memo The memo that should be set to active.
     *
     * @return void
     */
    public function setMemoActive(Memo $memo)
    {
        dump("Memo '{$memo->title}' was set to active.");
    }

    /**
     * Distribute the memo to all crewmemers that are currently in the target audience criteria.
     *
     * @param  Memo $memo The memo that is to be distributed.
     *
     * @return void
     */
    public function distributeMemo(Memo $memo)
    {
        $amount = $this->occupationService->getOccupation();

        dump("Memo '{$memo->title}' was distributed to {$amount} people.");
    }
}
