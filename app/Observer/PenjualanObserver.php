<?php

namespace App\Observer;

use App\Events\PenjualanEvent;
use App\Model\Penjualan;

class PenjualanObserver
{
    public function created(Penjualan $penjualan)
    {
        $hari = array(
            'sepatu' => app()->make('HariService')->hari(1, date('m')),
            'baju' => app()->make('HariService')->hari(2, date('m')),
            'celana' => app()->make('HariService')->hari(3, date('m')),
            'aksesoris' => app()->make('HariService')->hari(4, date('m'))
        );
        $bulan = array(
            'sepatu' => app()->make('BulanService')->bulan(1),
            'baju' => app()->make('BulanService')->bulan(2),
            'celana' => app()->make('BulanService')->bulan(3),
            'aksesoris' => app()->make('BulanService')->bulan(4)
        );
        $tahun = app()->make('TahunService')->tahun(1, 2, 3, 4);

        broadcast(new PenjualanEvent($hari,$bulan,$tahun));
    }
}