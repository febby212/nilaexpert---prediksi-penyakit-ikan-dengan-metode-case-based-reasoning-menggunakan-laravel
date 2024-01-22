<?php 
namespace App\Repository;

use App\Interface\UserInterface;
use App\Models\User;

class UserRepository implements UserInterface 
{
    public function getAll() {
        return User::with('role')->get();
    }

    public function store($data) {
        User::create($data);
    }
}