<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{

    protected $fillable = [
        'name', 'lastname', 'lastname2', 
        'curp', 'email', 'rfc', 'birthday', 
        'bloodType', 'sex'
    ];

    use HasFactory;
}
