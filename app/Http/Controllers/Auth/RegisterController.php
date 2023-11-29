<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'nombre' => ['required', 'string', 'max:255'],
            'apmat' => ['required', 'string', 'max:255'],
            'domicilio' => ['required', 'string', 'max:255'],
            'telcel' =>['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'nombre.required'=>'Por favor, indique su nombre',
            'apmat.required'=>'Por favor, indique su apellido materno',
            'domicilio.required'=>'Por favor, indique su domicilio',
            'telcel.required' => 'Debe dejar un número telefónico de contacto',
            'email.required'=>'Se require un correo electrónico para continuar',
            'email.unique'=>'El correo que esté registrando ya ha sido empleado',
            'password.required'=>'Se requiere de una contraseña para poder continuar',
            'password.min'=>'La contraseña debe contar con al menos 8 caracteres',
            'password.confirmed'=>'No concuerda la verificación de la contraseña',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nombre' => $data['nombre'],
            'appat' => $data['appat'],
            'apmat' => $data['apmat'],
            'name' => $data['nombre']." ".$data['appat'],
            'domicilio' => $data['domicilio'],
            'telcel' => $data['telcel'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
