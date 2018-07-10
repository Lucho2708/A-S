<?php

namespace App\Http\Controllers;
use App\Garantia;
use Illuminate\Http\Request;
use Session;

class GarantiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * este es el metodo  del perfil 
     */



    public function index()
    {

         $cliente1= Garantia::all();
        return view('garantias.listar',compact('cliente1'));
         

    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('garantias.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
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


     public function store(Request $request)
    {
        Garantia::create($request->all());
        alert()->success('El registro fue creado exitosamente.','En hora buena')->autoclose(6000);
        return redirect('garantias');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {

      
        $garantia1=Garantia::all();
        $garantia1=Garantia::findorFail($id);
        return view('garantias.editar',['garantia1'=>$garantia1,'garantia1'=>$garantia1]);
        
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
        $garantia1=Garantia::findorFail($id);
        $garantia1->fecha_inicio=$request->fecha_inicio;
        $garantia1->fecha_final=$request->fecha_final;
        $garantia1->descripcion=$request->descripcion;
        $garantia1->daños=$request->daños;
        $garantia1->save();
          return redirect()->route('garantias.listar');


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
       $garantia1=Garantia::findorFail($id);
       $garantia1->delete();
       return redirect()->route('garantias.index');
   }catch(Exception $e){
   return"fatal error -".$e->getMessage();

   }
}
    }
