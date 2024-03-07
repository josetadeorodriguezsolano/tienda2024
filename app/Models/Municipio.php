<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Municipio extends Model
{
    use HasFactory;

    function ciudades(){
        return $this->hasMany(Ciudad::class,'municipio_id','id');
    }

    function estado(){
        return $this->belongsTo(Estado::class,'id','estado_id');
    }
}
