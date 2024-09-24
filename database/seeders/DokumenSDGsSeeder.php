<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DokumenSDGsSeeder extends Seeder
{
    public function run()
    {
        $dokumens = [
            [
                'id' => 1,
                'judul' => 'VLR 2022',
                'gambar' => 'VLR_2022.png',
                'file' => 'VLR_2022.pdf',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'judul' => 'VLR 2023',
                'gambar' => 'VLR_2023.png',
                'file' => 'VLR_2023.pdf',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'judul' => 'VLR 2024',
                'gambar' => 'VLR_2024.png',
                'file' => 'VLR_2024.pdf',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 4,
                'judul' => 'Program Unggulan Kota Bandar Lampung 2024',
                'gambar' => 'Program-Unggulan-Kota-Bandar-Lampung-2024.png',
                'file' => 'Program-Unggulan-Kota-Bandar-Lampung-2024.pdf',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 5,
                'judul' => 'BOOKLET SDGs 2023',
                'gambar' => 'BOOKLET_SDGs_2023.png',
                'file' => 'BOOKLET_SDGs_2023.pdf',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 6,
                'judul' => 'Metadata Pilar Ekonomi Edisi II',
                'gambar' => 'Metadata-Pilar-Ekonomi-Edisi-II.png',
                'file' => 'Metadata-Pilar-Ekonomi-Edisi-II.pdf',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 7,
                'judul' => 'Metadata Pilar Sosial Edisi II',
                'gambar' => 'Metadata-Pilar-Sosial-Edisi-II.png',
                'file' => 'Metadata-Pilar-Sosial-Edisi-II.pdf',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 8,
                'judul' => 'Metadata Pilar Lingkungan Edisi II',
                'gambar' => 'Metadata-Pilar-Lingkungan-Edisi-II.png',
                'file' => 'Metadata-Pilar-Lingkungan-Edisi-II.pdf',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 9,
                'judul' => 'Buku 2 Matriks Rencana Aksi Daerah',
                'gambar' => 'Buku-2-Matriks-Rencana-Aksi-Daerah.png',
                'file' => 'Buku-2-Matriks-Rencana-Aksi-Daerah.pdf',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 10,
                'judul' => 'Pedoman Tagging SDGs',
                'gambar' => 'Pedoman_Tagging_SDGs.png',
                'file' => 'Pedoman_Tagging_SDGs.pdf',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('dokumens')->insert($dokumens);
    }
}
