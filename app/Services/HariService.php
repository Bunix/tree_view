<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class HariService
{
    public function hari($id, $get_bulan, $tahun)
    {
        if ($get_bulan == null) {
            $bulan = date('m');
            $get_tahun = '';
        } else {
            $bulan = $get_bulan;
            $get_tahun = $tahun;
        }
        $hari = array(
            '1' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 1)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '2' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 2)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '3' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 3)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '4' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 4)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '5' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 5)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '6' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 6)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '7' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 7)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '8' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 8)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '9' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 9)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '10' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 10)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '11' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 11)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '12' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 12)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '13' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 13)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '14' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 14)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '15' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 15)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '16' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 16)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '17' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 17)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '18' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 18)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '19' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 19)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '20' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 20)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '21' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 21)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '22' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 22)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '23' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 23)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '24' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 24)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '25' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 25)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '26' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 26)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '27' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 27)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '28' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 28)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '29' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 29)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '30' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 30)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan'),
            '31' => DB::table('penjualans')->where('id_barang', '=', $id)->where('tanggal', '=', 31)->where('bulan', '=', $bulan)->where('tahun', '=', $get_tahun)->sum('banyak_penjualan')
        );

        return $hari;
    }
}