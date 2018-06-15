<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use Notifiable;
    protected $table='pais';
    public $timestamps= false;

    protected $fillable = [
    	'pais'

    ];
}
