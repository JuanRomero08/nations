<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = "countries";
    protected $primaryKey = "country_id";
    use HasFactory;

    //relacion 1:M  con regiones 

    public function paises(){
        //hasMany:Parametros
        //1 modelo de relacion
        //FK del modelo actual en el modelo a relacionar
        return $this ->belongsTo(Region::class,
                              'country_id');
    }

    public function idiomas(){
        //belongsToMany
        //1 Modelo a relacionar
        //2 la tabla pivote
        // 3 FK de el modelo actual en el pivote
        return $this->belongsToMany(Language::class,
                                    'country_languages',
                                    'country_id',
                                    'language_id');
    }
}
