<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Case_base extends Model
{
    use HasFactory;
    
    protected $casts = [
        'id' => 'string',
    ];
    

    protected $fillable =[
        'id',
        'kd_gejala',
        'kd_penyakit',
        'bobot',
        'created_by',
        'updated_by'
    ];

    public function gejalaRelasi() {
        return $this->belongsTo(Gejala::class, 'kd_gejala');
    }
}
