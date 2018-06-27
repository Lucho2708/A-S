<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Session;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function perfil()
    {
        return view('perfil.update', array('user'=>Auth::user()));

    }

    public function update_avatar(Request $request){
        

        
        $user= Auth::user();
        $user->fill($request->all());
        $user->password=Hash::make($request->password);
        $user->save();
        
        alert()->success('Su perfil fue actualizado exitosamente')->autoclose(2000);
        
        return view('perfil.update',array ('user'=>Auth::user()));

    }
}
