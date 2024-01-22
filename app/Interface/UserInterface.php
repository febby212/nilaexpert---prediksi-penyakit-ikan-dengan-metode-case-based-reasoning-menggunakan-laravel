<?php
namespace App\Interface;

interface UserInterface
{
    public function getAll();
    public function store($data);
}