<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    public static $contador;

    public function productos() {
        return $this->hasMany(Producto::class,'categoria_id','id');
    }

    public static function buscarPorNombre($nombre){
        return Categoria::where('nombre',$nombre)->get()->first();
    }
}
