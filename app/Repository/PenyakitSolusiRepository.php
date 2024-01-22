<?php 
namespace App\Repository;

use App\Interface\PenyakitSolusiInterface;
use App\Models\Penyakit_solusi;

class PenyakitSolusiRepository implements PenyakitSolusiInterface 
{
    public function getAll() {
        return Penyakit_solusi::select('id', 'kd_penyakit', 'nama_penyakit', 'definisi', 'solusi')->orderBy('kd_penyakit', 'asc')->get();
    }

    public function getSolusi($penyakit) {
        return Penyakit_solusi::where('kd_penyakit', $penyakit)->select('kd_penyakit', 'nama_penyakit', 'definisi', 'solusi')->get();
    }

    public function getById($id)
    {
        return Penyakit_solusi::where('id', $id)->firstOrFail();
    }

    public function store($data)
    {
        return Penyakit_solusi::create($data);
    }

    public function edit($id, $data)
    {
        return Penyakit_solusi::whereId($id)->update($data);
    }

    public function destroy($id)
    {
        return Penyakit_solusi::destroy($id);
    }
}