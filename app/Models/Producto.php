<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    public function productos()
    {
        return $this->hassMany(Producto::class,'id','categoria_id');
    }
}
