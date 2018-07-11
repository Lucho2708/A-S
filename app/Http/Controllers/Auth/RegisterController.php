<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\Auth\Mail; 


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $messages=array('email.regex'=>'you email id is not valid.');

        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'lastname'=>'required|string|max:255',
            'email' => ['required', 'max:255', 'email', 'regex:/(.*)@(aysasesoriassasd|aysasesoriassas)\.com/i', 'unique:users'],
          
            'password' => 'required|string|min:6|confirmed',
            /*'usertype'=>'required',*/
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
    
    $data['confirmation_code'] = str_random(25);

        $user = User::create([
            'nombres' => $data['name'],
            'apellidos'=>$data['lastname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'confirmation_code' => $data['confirmation_code']
        ]);
        // Send confirmation code
      Mail::send('emails.confirmation_code', $data, function($message) use ($data) {
        $message->to($data['email'], $data['name'])->subject('Por favor confirma tu correo');
         });

    return $user;
    }


    public function verify($code)
    {
    $user=User::where('confirmation_code', $code)->first();

    if (! $user)
        return redirect('/');

    $user->confirmed =true;
    $user->confirmation_code = null;
    $user->save();

    return redirect('/login')->with('Has confirmado correctamente tu correo!');
}

}
