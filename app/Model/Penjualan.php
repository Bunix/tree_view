<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $primaryKey = 'id_penjualan';

    protected $table = 'penjualans';

    protected $fillable = [
        'id_bulan', 'banyak_penjualan', 'tanggal'
    ];

    public $timestamps = false;

    public function bulan()
    {
        return $this->belongsTo(Bulan::class, 'id_bulan', 'id_bulan');
    }

    public function menu()
    {
        return $this->hasMany(menu_tree::class);
    }
}
