<?php
namespace App\Interface;

interface PenyakitSolusiInterface
{
    public function getAll();
    public function getSolusi($penyakit);
    public function getById($id);
    public function store($data);
    public function edit($id, $data);
    public function destroy($id);
}