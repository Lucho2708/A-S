<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{

    use Notifiable;
    protected $table='users';
    public $timestamps= false;

    protected $fillable = [
    	'nombres',
        'apellidos',
        'password',
        'email'
        
       

    ];
    
}