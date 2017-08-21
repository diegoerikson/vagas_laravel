<?php

namespace App\Models\site;

use Illuminate\Database\Eloquent\Model;


class Opportunitie extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'description',
        'active', 
        'salary', 
        'benefits', 
        'idinformation', 
        'note', 
        'idcompany', 
        'dtclosing', 
        'idhierarchy',
    ];

    
}
