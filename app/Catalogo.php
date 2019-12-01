<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
  
    public $timestamps = false;
    protected $primaryKey = 'catalogo_id';
    protected $guarded = ["id"];
    protected $table ='catalogo';
}
