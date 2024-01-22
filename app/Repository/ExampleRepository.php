<?php 
namespace App\Repository;

use App\Interface\ExampleInterface;

class ExampleRepository implements ExampleInterface 
{
    public function getAll() {
        return ("sudah keluar");
    }
}