<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'imagen_id';
    protected $guarded = ["id"];
    protected $table ='imagen';
}
