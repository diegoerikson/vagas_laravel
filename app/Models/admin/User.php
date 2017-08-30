<?php

namespace App\Models\admin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'active', 'phone', 'gender', 
        'dtbirth', 'usertype', 'cpf_cnpj', 'cep', 'acceptemail', 'deficient',
    //'skype', 'phone', 'phone2', 'gender', 
    //'idcompany', 'idcity',  'neighborhood',
    //'street', 'streetnumber', 'complement',
    // 'site', 'linkedin', 'dtexclusion', 'note', 'userimage',
    //'cnh', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
