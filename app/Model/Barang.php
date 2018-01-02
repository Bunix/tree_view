<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $primaryKey = 'id_barang';

    protected $table = 'barangs';

    protected $fillable = [
        'barang'
    ];

    public $timestamps = false;

    public function penjualan()
    {
        return $this->hasMany(Penjualan::class);
    }
}
