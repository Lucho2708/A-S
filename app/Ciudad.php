<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use Notifiable;
    protected $table='ciudad';
    public $timestamps= false;

   protected $fillable=[
   	'ciudad',
   	'departamentos_id'


   ];

   public static function towns($id){
   		return Town::where('departamentos_id',"=",$id)
   		->get();
   }
}
