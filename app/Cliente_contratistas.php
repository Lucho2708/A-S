<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Cliente_contratistas extends Model
{
    use Notifiable;
    protected $table='cliente_contratistas';
    public $timestamps= false;

    protected $fillable = [
    	'nombres',
    	'apellidos',
    	'tip_identidad',
    	'num_identidad',
    	'telefono',
    	'email',
    	'departamento',
    	'ciudad',
    	'tip_persona',
    	'profesion'

    ];
}
