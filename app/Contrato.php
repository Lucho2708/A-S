<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use Notifiable;
    protected $table='contrato';
    public $timestamps= false;

    protected $fillable = [
    	
    ];
}
