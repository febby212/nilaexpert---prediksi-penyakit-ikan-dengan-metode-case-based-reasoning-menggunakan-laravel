<?php

namespace App\Repository;

use App\Interface\HasilInterface;
use App\Models\Hasil;

class HasilRepository implements HasilInterface
{
    public function getAll()
    {
        return Hasil::select('user_id', 'jenis_ikan', 'umur_ikan', 'kd_gejala', 'kd_penyakit')->get();
    }

    public function store($data)
    {
        return Hasil::create($data);
    }

    public function findByIdUser($id_user)
    {
        return Hasil::with('riwayat')->where('user_id', $id_user)->select('user_id', 'jenis_ikan', 'umur_ikan', 'kd_penyakit', 'kd_gejala', 'created_at')->get();
    }
}
