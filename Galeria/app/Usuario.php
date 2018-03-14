<?php

namespace Trueque;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	public $timestamps = false;
    protected $table = "usuarios";

    protected $fillable = ['nombres', 'apellidop', 'apellidom', 'correo', 'telefono', 'fecha_nacimiento' ,'sexo', 'password'];

    public function setPasswordAttributes($valor){
    	if(!empty($valor)){
    		$this->attributes['password'] = \Hash::make($valor);
    	}

    }
}
