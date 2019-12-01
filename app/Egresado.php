<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Egresado extends Model
{
    //
    public $timestamps = false;
    protected $primaryKey = 'egresado_id';
    protected $guarded = ["id"];
    protected $table ='egresado';
}
