<?php
namespace App\Interface;

interface CaseBaseInterface
{
    public function getAll();
    public function getByGejala($kd_gejala);
    public function getByPenyakit($penyakit);
    public function getById($id);
    public function store($data);
    public function edit($id, $data);
    public function destroy($id);
}