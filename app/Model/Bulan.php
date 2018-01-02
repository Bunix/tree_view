<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bulan extends Model
{
    protected $primaryKey = 'id_bulan';

    protected $table = 'bulans';

    protected $fillable = [
        'bulan'
    ];

    public $timestamps = false;

    public function penjualan()
    {
        return $this->hasMany(Penjualan::class);
    }
}
