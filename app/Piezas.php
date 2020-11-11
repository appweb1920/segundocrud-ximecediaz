<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Piezas extends Model
{
    protected $table="piezas";
    protected $fillable=['nombre','descripcion', 'numPZ', 'costo'];

    

}