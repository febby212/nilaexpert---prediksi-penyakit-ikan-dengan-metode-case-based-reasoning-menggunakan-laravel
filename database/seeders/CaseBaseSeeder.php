<?php

namespace Database\Seeders;

use App\Models\Case_base;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class CaseBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kd_gejala' => 'G022', 'kd_penyakit' => 'P008', 'bobot' => 3],
            ['kd_gejala' => 'G021', 'kd_penyakit' => 'P008', 'bobot' => 3],
            ['kd_gejala' => 'G020', 'kd_penyakit' => 'P008', 'bobot' => 3],
            ['kd_gejala' => 'G019', 'kd_penyakit' => 'P008', 'bobot' => 5],
            ['kd_gejala' => 'G018', 'kd_penyakit' => 'P008', 'bobot' => 5],
            ['kd_gejala' => 'G017', 'kd_penyakit' => 'P008', 'bobot' => 3],
            ['kd_gejala' => 'G016', 'kd_penyakit' => 'P008', 'bobot' => 5],
            ['kd_gejala' => 'G014', 'kd_penyakit' => 'P008', 'bobot' => 3],
            ['kd_gejala' => 'G013', 'kd_penyakit' => 'P008', 'bobot' => 1],
            ['kd_gejala' => 'G006', 'kd_penyakit' => 'P008', 'bobot' => 1],
            ['kd_gejala' => 'G015', 'kd_penyakit' => 'P007', 'bobot' => 5],
            ['kd_gejala' => 'G011', 'kd_penyakit' => 'P007', 'bobot' => 1],
            ['kd_gejala' => 'G030', 'kd_penyakit' => 'P006', 'bobot' => 5],
            ['kd_gejala' => 'G029', 'kd_penyakit' => 'P006', 'bobot' => 3],
            ['kd_gejala' => 'G010', 'kd_penyakit' => 'P006', 'bobot' => 3],
            ['kd_gejala' => 'G028', 'kd_penyakit' => 'P005', 'bobot' => 5],
            ['kd_gejala' => 'G027', 'kd_penyakit' => 'P005', 'bobot' => 3],
            ['kd_gejala' => 'G026', 'kd_penyakit' => 'P004', 'bobot' => 3],
            ['kd_gejala' => 'G025', 'kd_penyakit' => 'P004', 'bobot' => 5],
            ['kd_gejala' => 'G024', 'kd_penyakit' => 'P004', 'bobot' => 5],
            ['kd_gejala' => 'G023', 'kd_penyakit' => 'P004', 'bobot' => 5],
            ['kd_gejala' => 'G014', 'kd_penyakit' => 'P003', 'bobot' => 5],
            ['kd_gejala' => 'G012', 'kd_penyakit' => 'P003', 'bobot' => 1],
            ['kd_gejala' => 'G011', 'kd_penyakit' => 'P003', 'bobot' => 3],
            ['kd_gejala' => 'G009', 'kd_penyakit' => 'P003', 'bobot' => 3],
            ['kd_gejala' => 'G006', 'kd_penyakit' => 'P003', 'bobot' => 3],
            ['kd_gejala' => 'G001', 'kd_penyakit' => 'P003', 'bobot' => 1],
            ['kd_gejala' => 'G008', 'kd_penyakit' => 'P002', 'bobot' => 1],
            ['kd_gejala' => 'G007', 'kd_penyakit' => 'P002', 'bobot' => 1],
            ['kd_gejala' => 'G006', 'kd_penyakit' => 'P002', 'bobot' => 3],
            ['kd_gejala' => 'G004', 'kd_penyakit' => 'P002', 'bobot' => 5],
            ['kd_gejala' => 'G001', 'kd_penyakit' => 'P002', 'bobot' => 3],
            ['kd_gejala' => 'G005', 'kd_penyakit' => 'P001', 'bobot' => 5],
            ['kd_gejala' => 'G004', 'kd_penyakit' => 'P001', 'bobot' => 5],
            ['kd_gejala' => 'G003', 'kd_penyakit' => 'P001', 'bobot' => 5],
            ['kd_gejala' => 'G002', 'kd_penyakit' => 'P001', 'bobot' => 1],
            ['kd_gejala' => 'G001', 'kd_penyakit' => 'P001', 'bobot' => 3],
        ];

        foreach ($data as $item) {
            Case_base::create([
                'id' => Uuid::uuid4()->toString(),
                'kd_gejala' => $item['kd_gejala'],
                'kd_penyakit' => $item['kd_penyakit'],
                'bobot' => $item['bobot'],
                'created_by' => 'dev',
            ]);
        }
    }
}
