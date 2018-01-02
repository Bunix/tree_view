<?php

namespace App\Http\Controllers\Pages\Menu;

use App\Events\PenjualanEvent;
use App\Http\Controllers\Controller;
use App\Model\Penjualan;
use App\Services\BulanService;
use App\Services\HariService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.chart.charts');
    }

    public function getHari()
    {
        $get = array(
            'sepatu' => app()->make('HariService')->hari(1,null,null),
            'baju' => app()->make('HariService')->hari(2,null,null),
            'celana' => app()->make('HariService')->hari(3,null,null),
            'aksesoris' => app()->make('HariService')->hari(4,null,null)
        );
        return json_encode($get);
    }

    public function getBulan()
    {
        $get = array(
            'sepatu' => app()->make('BulanService')->bulan(1),
            'baju' => app()->make('BulanService')->bulan(2),
            'celana' => app()->make('BulanService')->bulan(3),
            'aksesoris' => app()->make('BulanService')->bulan(4)
        );
        return json_encode($get);
    }

    public function getTahun()
    {
        $get = app()->make('TahunService')->tahun(1, 2, 3, 4);
        return json_encode($get);
    }

    public function sell(Request $request)
    {
        $sell = new Penjualan();

        $sell->id_bulan = date('d');
        $sell->id_barang = $request->get('barang');
        $sell->banyak_penjualan = $request->get('banyak');
        $sell->tanggal = date('d');
        $sell->bulan = date('m');
        $sell->tahun = date('Y');

        $sell->save();

    }
}
