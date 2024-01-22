<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    use HasFactory;

    protected $casts = ['id' => 'string'];

    protected $fillable = [
        'id',
        'user_id',
        'jenis_ikan',
        'umur_ikan',
        'kd_penyakit',
        'kd_gejala',
    ];

    public function riwayat()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
