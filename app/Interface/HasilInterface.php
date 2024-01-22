<?php
namespace App\Interface;

interface HasilInterface
{
    public function getAll();
    public function store($data);
    public function findByIdUser($id_user);
}