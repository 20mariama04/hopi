<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Models\Emergency;

class EmergencyCreated implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;

    public $emergency;

    public function __construct(Emergency $emergency)
    {
        $this->emergency = $emergency;
    }

    public function broadcastOn()
    {
        return new Channel('emergencies');
    }
}
