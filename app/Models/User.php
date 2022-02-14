<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    
    public function ratings() {
        return $this->hasMany(Rating::class);
    }
    
    public function locations() {
        return $this->hasMany(Location::class);
    }

    protected $table = 'users';
    
    protected $visible = [
        'id',
        'username',
        'email',
        'permission',
        'created_at',
    ];

    protected $hidden = [
        'password',
    ];

    protected $fillable = [
        'username',
        'email',
        'password',
        'permission',
    ];
}
