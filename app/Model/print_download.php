<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class print_download extends Model
{
    protected $primaryKey = 'id_activity';

    protected $table = 'print_downloads';

    protected $fillable = [
        'user_id', 'id_tree', 'type', 'file_tree', 'tanggal', 'waktu'
    ];

    public $timestamps = false;

    public function tree_menu()
    {
        return $this->belongsTo(menu_tree::class, 'id_tree', 'id_tree');
    }

    public function id_type()
    {
        return $this->belongsTo(File_Tree::class, 'type', 'id_file');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}