<?php

namespace App\Http\Controllers;
use App\Cliente_contratistas;
use Illuminate\Http\Request;
use Session;
use App\Departamentos;
use App\Ciudad;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('cliente.listar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $departamentos =Departamentos::all();
        $ciudad= Ciudad::all();
        return view('cliente.crear',compact('departamentos','ciudad'));
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Cliente_contratistas::create($request->all());
        alert()->success('El registro fue creado exitosamente.','En hora buena')->autoclose(6000);
        return view('cliente.listar');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

public function cliente()
    {
        return view('cliente.crear', array('Cliente_contratistas'=>Auth::Cliente_contratistas()));
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
            $Cliente_contratistas= Auth::Cliente_contratistas();
            $Cliente_contratistas->fill($request->all());
            $Cliente_contratistas->save();
        
        alert()->success('Su perfil fue actualizado exitosamente')->autoclose(2000);
        
        return view('cliente.crear',array ('Cliente_contratistas'=>Auth::Cliente_contratistas()));
    
}







}
