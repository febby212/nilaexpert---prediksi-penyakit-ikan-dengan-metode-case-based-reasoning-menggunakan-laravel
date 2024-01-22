<?php 
namespace App\Repository;

use App\Interface\GejalaInterface;
use App\Models\Gejala;

class GejalaRepository implements GejalaInterface 
{
    public function getAll() {
        return Gejala::select('id', 'kd_gejala', 'gejala')->orderBy('kd_gejala', 'asc')->get();
    }

    public function getBaseGejala($kd_gejala) {
        return Gejala::where('kd_gejala', $kd_gejala)->pluck('gejala')->first();
    }

    public function getById($id)
    {
        return Gejala::where('id', $id)->firstOrFail(['id', 'kd_gejala', 'gejala']);
    }

    public function store($data)
    {
        return Gejala::create($data);
    }

    public function edit($id, $data)
    {
        return Gejala::whereId($id)->update($data);
    }

    public function destroy($id)
    {
        return Gejala::destroy($id);
    }
}