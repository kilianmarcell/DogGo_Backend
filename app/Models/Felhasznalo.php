<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Felhasznalo extends Model
{
    use HasFactory;

    protected $fillable = [
        'felhasznalonev',
        'email',
        'password',
        'jogosultsag'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'regisztracio_datum' => 'datetime',
    ];
}
