<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedback';

    protected $visible = [
        'id',
        'comment',
        'read',
        'created_at',
    ];

    protected $fillable = [
        'comment',
        'read'
    ];

    protected $casts = [
        'read' => 'boolean',
    ];
}
