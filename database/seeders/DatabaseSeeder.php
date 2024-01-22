<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'id' => Uuid::uuid4()->toString(),
                'name' => 'admin',
                'created_by' => 'Dev'
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'name' => 'user',
                'created_by' => 'Dev'
            ]
        ]);

        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            GejalaSeeder::class,
            PenyakitSolusiSeeder::class,
            CaseBaseSeeder::class,
        ]);

    }
}
