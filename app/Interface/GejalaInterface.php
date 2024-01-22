<?php
namespace App\Interface;

interface GejalaInterface
{
    public function getAll();
    public function getBaseGejala($kd_gejala);
    public function getById($id);
    public function store($data);
    public function edit($id, $data);
    public function destroy($id);
}