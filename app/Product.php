<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nombre', 'estilo', 'tipo_area','precio'];
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
