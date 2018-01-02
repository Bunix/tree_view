<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TestUpload extends Model
{
    protected $primaryKey = "id_test";

    protected $table = "test_uploads";

    protected $fillable = [
        'file'
    ];

    public $timestamps = false;
}
