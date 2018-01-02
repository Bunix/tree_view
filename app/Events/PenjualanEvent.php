<?php

namespace App\Events;

use App\Penjualan;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PenjualanEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $penjualan;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(array $hari, array $bulan, array $tahun)
    {
        $this->penjualan = [
            'hari'=>$hari,
            'bulan' => $bulan,
            'tahun' => $tahun
        ];
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('penjualan');
    }
}
