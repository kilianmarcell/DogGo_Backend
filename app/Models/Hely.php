<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hely extends Model
{
    use HasFactory;

    protected $fillable = [
        'nev',
        'lat',
        'lng',
    ];
}
