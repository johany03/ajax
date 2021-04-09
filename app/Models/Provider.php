<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    protected $tabla = 'provider';
    protected $fillable = [
        'names',
        'surnames',
        'phone',
        'date_birth',
        'photo',
        'created_at',
        'updated_at'
    ];
}
