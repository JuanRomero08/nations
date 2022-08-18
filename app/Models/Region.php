<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = "regions";
    protected $primaryKey = "region_id";
    use HasFactory;

    public function continente(){
        //belongsTo: Paramtetros
        //1 modelo a relacionar
        // La FK del modelo a relacionar, en el modelo
        //actual
        return $this->belongsTo(Continent::class ,
                                'continent_id');
    }
    // relacion entre una region y sus paises
    // 1_M
    public function paises(){
        return $this->hasMany(Country::class, 'region_id');
    }

    public function pais(){
        return $this->belongsTo(Country::class, 'region_id');
    }

}
