<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;
    
    protected $casts = [
        'id' => 'string',
    ];
    

    protected $fillable = [
        'id',
        'kd_gejala',
        'gejala',
        'created_by',
        'updated_by'
    ];
}
