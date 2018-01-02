<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class menu_tree extends Model
{
    protected $primaryKey = "id_tree";

    protected $table = "menu_tree";

    protected $fillable = [
        'parent_id', 'user_id', 'kode_form', 'id_file','type', 'title', 'file', 'tanggal', 'waktu'
    ];

    public $timestamps = false;

    public function childs()
    {
        return $this->hasMany(menu_tree::class, 'parent_id', 'id_tree');
    }

    public function pdf()
    {
        return $this->belongsTo(Penjualan::class, 'file', 'bulan');
    }

    public function files()
    {
        return $this->belongsTo(File_Tree::class, 'id_file', 'id_file');
    }
}
