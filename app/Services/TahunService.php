<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class TahunService
{
    public function tahun($a, $b, $c, $d)
    {
        return array(
            'sepatu' => DB::table('penjualans')->where('id_barang', '=', $a)->where('tahun', '=', 2017)->sum('banyak_penjualan'),
            'baju' => DB::table('penjualans')->where('id_barang', '=', $b)->where('tahun', '=', 2017)->sum('banyak_penjualan'),
            'celana' => DB::table('penjualans')->where('id_barang', '=', $c)->where('tahun', '=', 2017)->sum('banyak_penjualan'),
            'aksesoris' => DB::table('penjualans')->where('id_barang', '=', $d)->where('tahun', '=', 2017)->sum('banyak_penjualan')
        );
    }
}