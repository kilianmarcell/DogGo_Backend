<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function location() {
        return $this->belongsTo(Location::class);
    }

    protected $table = 'ratings';
    
    protected $visible = [
        'id',
        'stars',
        'description',
    ];

    protected $fillable = [
        'stars',
        'description',
    ];
}
