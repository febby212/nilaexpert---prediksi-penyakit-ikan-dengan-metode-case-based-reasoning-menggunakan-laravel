<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit_solusi extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'string',
    ];
    
    
    protected $fillable = [
        'id',
        'kd_penyakit',
        'nama_penyakit',
        'definisi',
        'solusi',
        'created_by',
        'updated_by'
    ];
}
