<?php
namespace App\Interface;

interface RoleInterface
{
    public function getAll();
    public function findIdByRoleUser();
}