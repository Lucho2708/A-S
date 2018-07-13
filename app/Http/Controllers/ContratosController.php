<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamentos;
use App\Ciudad;
use App\Contrato;
use Illuminate\Database\QueryException;
use Session;




class ContratosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $contrato=Contrato::all();
        return view('contratos.listar',compact('contrato'));
      
    }

    /**
     * Show the form for creating a new  resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $departamentos =Departamentos::all();
        $ciudad= Ciudad::all();
        return view('contratos.crear',compact('departamentos','ciudad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store (Request $request)
    {


        Contrato::create($request->all());
        alert()->success('El registro fue creado exitosamente.','En hora buena')->autoclose(6000);
        return view('contratos.listar');


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
       
        $contrato2=Contrato::all();
        $contrato2=Contrato::findorFail($id);
        return view('contratos.editar',['contrato2'=>$contrato2,'contrato2'=>$contrato2]);
        
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
        $contrato2=Contrato::findorFail($id);
        $contrato2->nom_empresa=$request->nom_empresa;
        $contrato2->nit_empresa=$request->nit_empresa;
        $contrato2->departamento=$request->departamento;
        $contrato2->ciudad=$request->ciudad;
        $contrato2->direccion=$request->direccion;
        $contrato2->email=$request->email;
        $contrato2->tip_contrato=$request->tip_contrato;
        $contrato2->fecha_inicio=$request->fecha_inicio;
        $contrato2->fecha_final=$request->fecha_final;
        $contrato2->estado_contrato=$request->estado_contrato;
        $contrato2->acuerdo_pago=$request->acuerdo_pago;
        $contrato2->num_cuenta=$request->num_cuenta;
        $contrato2->valor_contrato=$request->valor_contrato;
        $contrato2->notas=$request->notas;

        $contrato2->save();
          return redirect()->route('contratos.listar');
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
       $contrato2=Contrato::findorFail($id);
       $contrato2->delete();
       return redirect()->route('contratos.index');
      } catch(Exception $e){
     return"fatal error -".$e->getMessage();
    }
    }


}
