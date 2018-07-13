<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\User;
use Mail;
use App\Mail\VerifyEmail;
 


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
      
        return Validator::make($data, [
            'name'      =>  'required|string|max:255',
            'lastname'  =>  'required|string|max:255',
            'email'     =>  ['required','email','string','max:255','regex:/(.*)@(aysasesoriassasd|aysasesoriassas)\.com/i','unique:users'],
            'password'  =>  'required|string|min:6|confirmed',
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
        alert()->success('El registro fue creado exitosamente.','Verificar en el correo electronico')->autoclose(3000);

        $user = User::create([
            'nombres' => $data['name'],
            'apellidos'=>$data['lastname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'confirmation_code' => Str::random(25),
        ]);

        $thisUser = User::findOrFail($user->id);
        $this->sendEmail($thisUser);
    }

    public function sendEmail($thisUser){

        Mail::to($thisUser['email'])->send(new VerifyEmail($thisUser));
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        // $this->guard()->login($user);
        return redirect (route('verifyEmailFirst'));
        

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
                        

    }

    public function verifyEmailFirst(){
        return view('emails.verifyEmailFirst');
    }

    public function sendEmailDone($email, $verifyToken) {

        $user = User::where(['email'=>$email,'confirmation_code'=>$verifyToken])->first();

        if ($user){
            User::where(['email'=>$email,'confirmation_code'=>$verifyToken])->update(['confirmed'=>'1','confirmation_code'=>'']);
        }else{
            return 'Usuario no encontrado';


        }
    }

}
