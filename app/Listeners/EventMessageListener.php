<?php

namespace App\Listeners;

use App\Events\EventMessage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use \Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use \Illuminate\Foundation\Bus\Dispatchable;
use \Illuminate\Broadcasting\InteractsWithSockets;
use \Illuminate\Queue\SerializesModels;

class EventMessageListener implements ShouldBroadcast {

    use Dispatchable,
        InteractsWithSockets,
        SerializesModels;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public $Message;
    public function __construct() {
        //
    }

    /**
     * Handle the event.
     *
     * @param  EventMessage  $event
     * @return void
     */
    public function handle(EventMessage $event) {
        //
    }

    public function broadcastOn() {
        
    }

}
