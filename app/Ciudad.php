<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
  protected $table='ciudad';
    protected $fillable=['ciudad','departamentos_id'];
   
    public static function towns($id){
      return Ciudad::where('departamentos_id',"=",$id)
      ->get();
   }
}
