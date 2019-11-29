<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['nombre','descripcion'];
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function product(){
        return $this->hasMany(Categoria::class, 'categoria_id');
    }
}
