<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'tower_id',
        'email',
        'number',
        'adult',
        'child',
        'date',
        'message',
    ];
}
