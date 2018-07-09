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
    public function store(Request $request)
    {
        Garantia::create($request->all());
        alert()->success('El registro fue creado exitosamente.','En hora buena')->autoclose(6000);
        return redirect('garantias');
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

        $cliente1= Garantia::all();
        return view('garantias.editar',compact('cliente1'));
       /*
        $garantias=Garantia::all();
        $cliente1=Garantia::findorFail($id);
        return view('garantias.editar',['garantias'=>$garantias,'cliente1'=>$cliente1]);
        */
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
  
        $cliente1->fill($request->all());
        $cliente1->save();
          return view('garantias.editar');


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
}
