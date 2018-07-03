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
        $cliente=Cliente_contratistas::find($id);
        if($cliente){

            $clienteActive= Auth::cliente()->id;
            if($clienteActive==$id){
        return view('cliente.editar', compact('cliente'));

            }

            else{

                return"accion no permitida";
            }


        }
        else
        {
            return"usuario no encontrado.";
        }


   
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
        $clienteFind= Cliente_contratistas::find($id);
           
            if($clienteFind)
            {
                $clienteActive=Auth::cliente()->id;

            if ($clienteActive==$id)
             {
              $this->validate(request(),[
             'nombres'=>'required',
             'apellidos'=>'required',
             'tip_identidad'=>'required',
             'num_identidad'=>'required',
             'telefono'=>'required',
             'telefono1'=>'required',
             'email'=>'required',
             'departamento'=>'required',
             'ciudad'=>'required',
             'direccion'=>'required',
             'tip_persona'=>'required',
             'profesion'=>'required'

              ]);

              $clienteFind->nombres=$request->get('nombres');
              $clienteFind->apellidos=$request->get('apellidos');
              $clienteFind->tip_identidad=$request->get('tip_identidad');
              $clienteFind->num_identidad=$request->get('num_identidad');
              $clienteFind->telefono=$request->get('telefono');
              $clienteFind->telefono1=$request->get('telefono1');
              $clienteFind->email=$request->get('email');
              $clienteFind->departamento=$request->get('departamento');
              $clienteFind->ciudad=$request->get('ciudad');
              $clienteFind->direccion=$request->get('direccion');
              $clienteFind->tip_persona=$request->get('tip_persona');
              $clienteFind->profesion=$request->get('profesion');

              $clienteFind->save();

            return redirect('cliente');

            }
        }
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
