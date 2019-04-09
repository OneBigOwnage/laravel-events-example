<?php

namespace App;

class OccupationService
{
    /**
     * Retrieve the amount of people that are currently on a barge.
     *
     * @return int
     */
    public function getOccupation()
    {
        return rand(1, 20);
    }
}
