<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class BulanService
{
    public function bulan($id)
    {
        $bulan = array(
            '1' => DB::table('penjualans')->where('id_barang', '=', $id)->where('bulan', '=', 1)->sum('banyak_penjualan'),
            '2' => DB::table('penjualans')->where('id_barang', '=', $id)->where('bulan', '=', 2)->sum('banyak_penjualan'),
            '3' => DB::table('penjualans')->where('id_barang', '=', $id)->where('bulan', '=', 3)->sum('banyak_penjualan'),
            '4' => DB::table('penjualans')->where('id_barang', '=', $id)->where('bulan', '=', 4)->sum('banyak_penjualan'),
            '5' => DB::table('penjualans')->where('id_barang', '=', $id)->where('bulan', '=', 5)->sum('banyak_penjualan'),
            '6' => DB::table('penjualans')->where('id_barang', '=', $id)->where('bulan', '=', 6)->sum('banyak_penjualan'),
            '7' => DB::table('penjualans')->where('id_barang', '=', $id)->where('bulan', '=', 7)->sum('banyak_penjualan'),
            '8' => DB::table('penjualans')->where('id_barang', '=', $id)->where('bulan', '=', 8)->sum('banyak_penjualan'),
            '9' => DB::table('penjualans')->where('id_barang', '=', $id)->where('bulan', '=', 9)->sum('banyak_penjualan'),
            '10' => DB::table('penjualans')->where('id_barang', '=', $id)->where('bulan', '=', 10)->sum('banyak_penjualan'),
            '11' => DB::table('penjualans')->where('id_barang', '=', $id)->where('bulan', '=', 11)->sum('banyak_penjualan'),
            '12' => DB::table('penjualans')->where('id_barang', '=', $id)->where('bulan', '=', 12)->sum('banyak_penjualan')
        );

        return $bulan;
    }
}