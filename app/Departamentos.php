<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    use Notifiable;
    protected $table='departamentos';
    public $timestamps= false;

    protected $fillable = [
    	'departamento'

    ];
    	
    	
}
