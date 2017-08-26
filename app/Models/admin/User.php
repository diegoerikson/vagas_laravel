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
    protected $fillable = ['iduser', 'name', 'password', 'email', 'active',
    'skype', 'phone', 'phone2', 'gender', 'dtbirth',
    'idcompany', 'idcity', 'usertype', 'cpf_cnpj', 'neighborhood',
    'street', 'streetnumber', 'complement',
    'cep', 'site', 'linkedin', 'dtexclusion', 'note', 'image',
    'cnh', 'acceptemail', 'deficient', 'updated_at', 'created_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
