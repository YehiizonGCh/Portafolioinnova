<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proyecto
 *
 * @property $id
 * @property $Titulo
 * @property $Descripcion
 * @property $Imagen
 * @property $URL
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proyecto extends Model
{
    
    static $rules = [
		'Titulo' => 'required',
		'Descripcion' => 'required',
		'Imagen' => 'required',
		'URL' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Titulo','Descripcion','Imagen','URL'];



}
