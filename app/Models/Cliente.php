<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $tipo_documento
 * @property $numero_documento
 * @property $nombre_1
 * @property $nombre_2
 * @property $apellido_1
 * @property $apellido_2
 * @property $genero_id
 * @property $departamento_id
 * @property $municipio_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'tipo_documento' => 'required',
		'numero_documento' => 'required',
		'nombre_1' => 'required',
		'nombre_2' => 'required',
		'apellido_1' => 'required',
		'apellido_2' => 'required',
		'genero_id' => 'required',
		'departamento_id' => 'required',
		'municipio_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo_documento','numero_documento','nombre_1','nombre_2','apellido_1','apellido_2','genero_id','departamento_id','municipio_id'];



}
