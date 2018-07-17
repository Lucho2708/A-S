<?php

namespace App\Http\Controllers;
use App\Cliente_contratistas;
use Illuminate\Http\Request;
use Session;
use App\Departamentos;
use App\Departamento;
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
       $cliente=Cliente_contratistas::all();
        

  
        return view('cliente.listar',compact('cliente'));

   

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

        $states=Departamentos::pluck('departamento','id');

        
        return view('cliente.crear',compact('departamentos','ciudad','states'));
      
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
        return redirect('cliente');
         
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
        
        $cliente2=Cliente_contratistas::all();
        $cliente2=Cliente_contratistas::findorFail($id);
        return view('cliente.editar',['cliente2'=>$cliente2,'cliente2'=>$cliente2]);
        

   
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
        $cliente2=Cliente_contratistas::findorFail($id);
        $cliente2->fecha_inicio=$request->fecha_inicio;
        $cliente2->fecha_final=$request->fecha_final;
        $cliente2->descripcion=$request->descripcion;
        $cliente2->daños=$request->daños;
        $cliente2->save();
          return redirect()->route('cliente.listar');

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
