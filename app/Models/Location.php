<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function ratings() {
        return $this->hasMany(Rating::class);
    }

    protected $table = 'locations';

    protected $visible = [
        'id',
        'name',
        'description',
        'lat',
        'lng',
        'allowed',
        'user_id',
        'atlag'
    ];

    protected $fillable = [
        'name',
        'description',
        'lat',
        'lng',
        'allowed',
        'user_id'
    ];

    protected $casts = [
        'allowed' => 'boolean',
    ];
}
