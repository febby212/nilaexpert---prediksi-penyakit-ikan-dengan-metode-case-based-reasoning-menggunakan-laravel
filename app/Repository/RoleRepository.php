<?php 
namespace App\Repository;

use App\Interface\RoleInterface;
use App\Models\Role;

class RoleRepository implements RoleInterface 
{
    public function getAll() {
        return Role::get();
    }

    public function findIdByRoleUser() {
        return Role::where('name', 'user')->first()->toArray();
    }
}