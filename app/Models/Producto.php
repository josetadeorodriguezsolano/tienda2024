<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function categoria()
    {
        return $this->belongsTo(Categoria::class,"categoria_id","id");
        //return $this->hasOne(Categoria::class,'id','categoria_id');
    }
}
