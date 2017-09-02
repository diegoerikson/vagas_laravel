<?php

namespace App\Http\Controllers\Auth;

use App\Models\admin\User;
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
            'phone' => 'required|string|max:20', 
            'phone2' => 'string|max:20|nullable', 
            'gender' => 'required|string|max:1',
            'dtbirth' => 'required|date',    
            'usertype' => 'required|string|max:1',  
            'cpf_cnpj' => 'required|string|max:25|unique:users', 
            'cep' => 'required|string|max:20', 
            'acceptemail' => 'required|string|max:1', 
            'deficient' => 'required|string|max:1',                                                                                      
            'site' => 'string|max:150|nullable',
            'linkedin' => 'string|max:200|nullable',
            'note' => 'string|max:500|nullable',
            'skype' => 'string|max:50|nullable',
            'picture' => 'mimes:jpeg,jpg,png|nullable',                    
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
            'active' => 'N',
            'phone' => $data['phone'],            
            'phone2' => $data['phone2'],            
            'gender' => $data['gender'],
            'dtbirth' => $data['dtbirth'], 
            'usertype' => $data['usertype'],
            'cpf_cnpj' => $data['cpf_cnpj'],
            'cep' => $data['cep'],
            'acceptemail' => $data['acceptemail'],
            'deficient' => $data['deficient'],                                  
            'site' => $data['site'],
            'linkedin' => $data['linkedin'],
            'note' => $data['note'],
            'skype' => $data['skype'],
            'picture' => $data['picture'],                        
        ]);
    }
}
