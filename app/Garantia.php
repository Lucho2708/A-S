<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Garantia extends Model
{
    use Notifiable;
    protected $table='garantia';
    public $timestamps= false;

    protected $fillable = [   
    	'fecha_inicio',
    	'fecha_final',
    	'descripcion',
    	'daños'
    ];
}
