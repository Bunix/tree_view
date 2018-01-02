<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class File_Tree extends Model
{
    protected $primaryKey = "id_file";

    protected $table = "file_trees";

    protected $fillable = [
        'file'
    ];

    public $timestamps = false;

    public function tree()
    {
        return $this->hasMany(menu_tree::class);
    }

}
