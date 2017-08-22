<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'active' => 'required|string|max:1',
            'skype' => 'string|max:50', 
            'phone' => 'required|string|max:20', 
            'phone2' => 'string|max:20', 
            'gender' => 'required|string|max:1', 
            'dtbirth' => 'required|string|min:10', 
            'idcompany' => 'number', 
            'idcity' => 'required|number', 
            'type' => 'required|string|max:1',  
            'cpf_cnpj' => 'required|string|max:25', 
            'neighborhood' => 'string|max:50',             
            'street' => 'string|max:200', 
            'number' => 'number', 
            'complement' => 'string|max:100', 
            'cep' => 'required|string|max:20', 
            'site' => 'string|max:150', 
            'linkedin' => 'string|max:250', 
            'dtexclusion' => 'string|min:10', 
            'note' => 'string', 
            'image' => 'string|max:200', 
            'cnh' => 'string|max:10',   
            'acceptemail' => 'required|string|max:10', 
            'deficient' => 'required|string|max:1'                           
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),                     
            'active' => $data['active'],
            'skype' => $data['skype'],
            'phone' => $data['phone'],
            'phone2' => $data['phone2'],
            'gender' => $data['gender'],
            'dtbirth' => $data['dtbirth'],
            'idcompany' => $data['idcompany'],
            'idcity' => $data['idcity'],
            'type' => $data['type'],
            'cpf_cnpj' => $data['cpf_cnpj'],
            'neighborhood' => $data['neighborhood'],
            'street' => $data['street'],
            'number' => $data['number'],
            'complement' => $data['complement'],
            'cep' => $data['cep'],
            'site' => $data['site'],
            'linkedin' => $data['linkedin'],
            'dtexclusion' => $data['dtexclusion'],
            'note' => $data['note'],
            'image' => $data['image'],
            'cnh' => $data['cnh'],
            'acceptemail' => $data['acceptemail'],
            'deficient' => $data['deficient']                       
        ]);
    }
}
