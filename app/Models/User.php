<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';
    
    protected $visible = [
        'username',
        'email',
        'permission',
    ];

    protected $hidden = [
        'id',
        'password',
    ];

    protected $fillable = [
        'username',
        'email',
        'password',
        'permission',
    ];
}
