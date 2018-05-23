<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoEmail;
use Alert;

class ContatoController extends Controller
{
    public function enviaContato(Request $request){
    	

    	Mail::to('info@aysasesoriassas.com')->send(new ContatoEmail($request));

    	alert()->success('Su mensaje ha sido enviado.')->autoclose(2000);

    	return redirect('/');
    }
}
