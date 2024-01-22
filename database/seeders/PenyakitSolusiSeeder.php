<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class PenyakitSolusiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penyakitSolusiData = [
            [
                'id' => Uuid::uuid4()->toString(),
                'kd_penyakit' => 'P001',
                'nama_penyakit' => 'Branchyomichosis',
                'definisi' => 'Branchiomycosis adalah penyakit infeksi yang menyerang insang ikan, termasuk ikan nila (Oreochromis spp.). Penyakit ini disebabkan oleh cendawan dari genus Branchiomyces, seperti Branchiomyces demigrans.',
                'solusi' => 'Lakukan isolasi ikan, Perbaikan Kualitas air, perawatan stress, pengobatan obat, peningkatan kekebalan ikan, memantau dan perawatan berkala.',
                'created_by' => 'dev',
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'kd_penyakit' => 'P002',
                'nama_penyakit' => 'White Spot',
                'definisi' => 'Penyakit white spot, juga dikenal sebagai "Ick" atau "Ich," adalah penyakit umum pada ikan yang disebabkan oleh parasit protozoa berjenis Ichthyophthirius multifiliis. Penyakit ini dapat memengaruhi berbagai jenis ikan, termasuk ikan nila.',
                'solusi' => 'Lakukan isolasi ikan, meningkatkan suhu air, memberikan garam, pengobatan obat, pemantauan dan perawatan lengkap, serta lakukan karantina.',
                'created_by' => 'dev',
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'kd_penyakit' => 'P003',
                'nama_penyakit' => 'Dactylograsis',
                'definisi' => 'Penyakit Dactylogyrasis adalah penyakit pada ikan yang disebabkan oleh parasit Dactylogyrus, yang merupakan jenis cacing parasit yang menyerang insang dan kulit ikan. Dactylogyrus biasanya menyerang ikan air tawar, termasuk ikan nila.',
                'solusi' => 'Identifikasi penyakit, lakukan isolasi ikan, perbaiki kualitas air, perhatikan kebersihan kolam, serta lakukan karantina.',
                'created_by' => 'dev',
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'kd_penyakit' => 'P004',
                'nama_penyakit' => 'Colomuniaris',
                'definisi' => 'Penyakit Columnaris, juga dikenal sebagai penyakit Cotton Wool, adalah penyakit yang sering menyerang ikan air tawar, termasuk ikan nila. Penyakit ini disebabkan oleh bakteri patogen Gram-negatif yang termasuk dalam genus Flavobacterium, terutama Flavobacterium columnare.',
                'solusi' => 'Lakukan isolasi ikan, meningkatkan suhu air, memberikan garam, pengobatan obat, pemantauan dan perawatan lengkap, serta lakukan karantina.',
                'created_by' => 'dev',
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'kd_penyakit' => 'P005',
                'nama_penyakit' => 'Saprolegniasi',
                'definisi' => 'Saprolegniasis adalah penyakit yang disebabkan oleh cendawan parasit dari genus Saprolegnia. Penyakit ini dapat menyerang berbagai jenis ikan, termasuk ikan nila, dan biasanya muncul pada insang, kulit, atau luka pada tubuh ikan.',
                'solusi' => 'Lakukan isolasi dan karantina ikan, perbaikan kualitas air, pembersihan dan desinfeksi, pengobatan jamur, penguatan sistem kekebalan ikan, perawatan luka, serta monitoring terus menerus.',
                'created_by' => 'dev',
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'kd_penyakit' => 'P008',
                'nama_penyakit' => 'Sterptoccociasi',
                'definisi' => 'Sreptococciasis (atau Streptococcosis) adalah penyakit pada ikan yang disebabkan oleh bakteri dari genus Streptococcus. Penyakit ini dapat memengaruhi berbagai jenis ikan air tawar, termasuk ikan nila.',
                'solusi' => 'Isolasi dan karantina ikan, perbaiki kualitas air, pemberian antibiotik, pemberian makanan dan suplemen, pemantauan terus-menerus, serta pastikan kebersihan dan sterilisasi.',
                'created_by' => 'dev',
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'kd_penyakit' => 'P006',
                'nama_penyakit' => 'Lerneasi',
                'definisi' => 'Penyakit Lerneasi, juga dikenal sebagai "cacing benang" atau "anchor worm," adalah penyakit pada ikan yang disebabkan oleh parasit cacing dari genus Lernaea. Parasit ini menyerang ikan air tawar, termasuk ikan nila.',
                'solusi' => 'Identifikasi penyakit, karantina ikan, perawatan mekanis, pengobatan kimia, perbaikan kualitas air, karantina setelah perawatan, dan pencegahan.',
                'created_by' => 'dev',
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'kd_penyakit' => 'P007',
                'nama_penyakit' => 'Gyrodactyliasis',
                'definisi' => 'Gyrodactyliasis adalah penyakit parasitik pada ikan yang disebabkan oleh cacing parasit yang disebut Gyrodactylus. Cacing ini adalah cacing pipih yang menempel pada kulit, sirip, dan insang ikan, dan mereka dapat mengakibatkan peradangan dan kerusakan pada jaringan ikan.',
                'solusi' => 'Karantina ikan, perawatan air, pengobatan obat-obatan, perawatan terhadap sarang telur, perbaikan praktik budidaya.',
                'created_by' => 'dev',
            ],
        ];

        // Insert data penyakit_solusi
        DB::table('penyakit_solusis')->insert($penyakitSolusiData);
    }
}
