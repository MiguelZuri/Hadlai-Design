<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    use SoftDeletes;

    protected $fillable = ['nombre', 'estilo', 'tipo_area','precio','cantidad','categoria','descripcion'];
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function categoria(){
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
}
