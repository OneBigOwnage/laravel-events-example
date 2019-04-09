<?php

namespace App\Events;

use App\Memo;

use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class ActivateMemo
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var Memo
     */
    public $memo;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Memo $memo)
    {
        $this->memo = $memo;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
