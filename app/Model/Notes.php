<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    protected $primaryKey = "id_notes";

    protected $table = "notes";

    protected $fillable = [
        'user_id', 'notes', 'tanggal', 'waktu'
    ];

    public $timestamps = false;

//    public function user()
//    {
//        return $this->belongsTo(User::class);
//    }
}
