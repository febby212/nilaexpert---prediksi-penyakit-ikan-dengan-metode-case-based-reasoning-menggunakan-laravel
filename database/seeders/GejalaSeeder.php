<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gejalaData = [
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G001', 'gejala' => 'Ikan mengap-mengap cenderung mengapung', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G002', 'gejala' => 'Malas berenang', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G003', 'gejala' => 'Insang berwarna kemerahan', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G004', 'gejala' => 'Tampak bercak putih pada tubuh, sirip, kulit/insang', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G005', 'gejala' => 'Insang mengalami nekrosa berat, berwarna merah hitam dan membusuk', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G006', 'gejala' => 'Nafsu makan menurun', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G007', 'gejala' => 'Ikan tampak gelisah', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G008', 'gejala' => 'Menggosokkan badan pada benda sekitar', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G009', 'gejala' => 'Warna tubuh pucat', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G010', 'gejala' => 'Lendir berlebih', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G011', 'gejala' => 'Ikan tampak kurus', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G012', 'gejala' => 'Berkumpul mendekati air masuk', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G013', 'gejala' => 'Tubuh berwarna gelap', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G014', 'gejala' => 'Pertumbuhan ikan lambat', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G015', 'gejala' => 'Peradangan pada kulit disertai warna merah pada lokasi penempelan cacing', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G016', 'gejala' => 'Menunjukkan tingkah laku abnormal seperti kejang/berputar', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G017', 'gejala' => 'Warna gelap di bawah rahang', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G018', 'gejala' => 'Mata menonjol', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G019', 'gejala' => 'Perut gembung (dopsy)', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G020', 'gejala' => 'Terdapat luka yang menjadi borok', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G021', 'gejala' => 'Pergerakan tidak terarah', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G022', 'gejala' => 'Pendarahan pada insang', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G023', 'gejala' => 'Terdapat luka di sekitar, kepala, badan/sirip', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G024', 'gejala' => 'Infeksi sekitar mulut, seperti benang', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G025', 'gejala' => 'Disekeliling luka tertutup pigmen berwarna kurang cerah', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G026', 'gejala' => 'Insang terinfeksi', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G027', 'gejala' => 'Adanya benang halus menyerupai kapas', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G028', 'gejala' => 'Adanya sekumpulan hifa (miselia) berwarna putih/putih kecoklatan', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G029', 'gejala' => 'Terlihat menyerupai panah yang menusuk tubuh ikan', 'created_by' => 'dev'],
            ['id' => Uuid::uuid4()->toString(), 'kd_gejala' => 'G030', 'gejala' => 'Terjadi luka pendarahan', 'created_by' => 'dev'],
        ];

        DB::table('gejalas')->insert($gejalaData);
    }
}
