<?php 
namespace App\Repository;

use App\Interface\CaseBaseInterface;
use App\Models\Case_base;

class CaseBaseRepository implements CaseBaseInterface 
{
    public function getAll() {
        return Case_base::with('gejalaRelasi')->orderBy('kd_penyakit', 'asc')->get();
    }

    public function getByGejala($kd_gejala) {
        return Case_base::with('gejalaRelasi')->where('kd_gejala', $kd_gejala)->select('kd_gejala', 'kd_penyakit', 'bobot')->orderBy('kd_penyakit', 'asc')->get();
    }

    public function getByPenyakit($penyakit) {
        return Case_base::where('kd_penyakit', $penyakit)->select('kd_penyakit', 'bobot')->orderBy('kd_penyakit', 'asc')->get();    
    }

    public function getById($id)
    {
        return Case_base::with('gejalaRelasi')->where('id', $id)->firstOrFail(['id', 'kd_gejala', 'kd_penyakit', 'bobot']);
    }

    public function store($data)
    {
        return Case_base::create($data);
    }

    public function edit($id, $data)
    {
        return Case_base::whereId($id)->update($data);
    }

    public function destroy($id)
    {
        return Case_base::destroy($id);
    }
}