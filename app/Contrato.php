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
    	'id',
        'nom_empresa',
        'nit_empresa',
        'departamento',
        'ciudad',
        'direccion',
        'email',
        'tip_contrato',
        'fecha_inicio',
        'fecha_final',
        'estado_contrato',
        'num_cuenta',
        'valor_contrato',
        'acuerdo_pago',
        'notas'
       

    ];
    
}
