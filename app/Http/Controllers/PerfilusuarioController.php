<?php

namespace App\Http\Controllers;

use App\Perfil;
use Illuminate\Http\Request;
use Session;

class PerfilusuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('perfil.listar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perfil.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
       Perfil::create($request->all());
        alert()->success('El registro fue creado exitosamente.','En hora buena')->autoclose(6000);
        return view('perfil.crear');
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
   //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function perfil()
    {
        return view('perfil.crear', array('user'=>Auth::user()));
    }
    public function update_avatar(Request $request){
        
        /*
        if($request->hasFile('avatar')){
            $avatar=$request->file('avatar');
            $filename=time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('images/'.$filename));
            $user= Auth::user();
            $user->fill($request->all());
            $user ->avatar=$filename;
            $user ->save();   
        }else{
        */
            $user= Auth::users();
            $user->fill($request->all());
            $user->save();
        
        alert()->success('Su perfil fue actualizado exitosamente')->autoclose(2000);
        
        return view('perfil.crear',array ('user'=>Auth::user()));
    
}



}
