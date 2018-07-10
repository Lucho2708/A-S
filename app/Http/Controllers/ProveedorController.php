<?php

namespace App\Http\Controllers;

use App\Cliente_contratistas;
use Illuminate\Http\Request;
use Session;
use App\Departamentos;
use App\Ciudad;


class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $cliente= Cliente_contratistas::all();
        return view('proveedor.listar',compact('cliente'));
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
        return view('proveedor.crear',compact('departamentos','ciudad'));
        
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
         return redirect('proveedor');
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
    public function edit(Request $request, $id)
    {
        
        $proveedor2=Cliente_contratistas::all();
        $proveedor2=Cliente_contratistas::findorFail($id);
        return view('proveedor.editar',['proveedor2'=>$proveedor2,'proveedor2'=>$proveedor2]);
        

   
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
        $proveedor2=Cliente_contratistas::findorFail($id);
        $proveedor2->fecha_inicio=$request->fecha_inicio;
        $proveedor2->fecha_final=$request->fecha_final;
        $proveedor2->descripcion=$request->descripcion;
        $proveedor2->daños=$request->daños;
        $proveedor2->save();
          return redirect()->route('proveedor.listar');

    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
       $cliente2=Cliente_contratistas::findorFail($id);
       $cliente2->delete();
       return redirect()->route('cliente.index');
   }catch(Exception $e){
   return"fatal error -".$e->getMessage();

   }
}

}
