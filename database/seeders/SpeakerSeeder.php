<?php

namespace Database\Seeders;

use App\Models\Speaker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpeakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Speaker::insert([
            [
                'nama' => 'Hanna Adelia Runtu',
                'materi' => 'Mengenali Potensi Diri dan Nilai-Nilai Dasar Green Leadership sebagai Fondasi Karakter Kepemimpinan Hijau',
                'kategori' => 'GLI',
                'foto' => '1.jpg'
            ],
            [
                'nama' => 'Margareta Rosemary',
                'materi' => 'Konsep Dasar dan Manfaat Penerapan Green Lifestyle dalam Kehidupan Sehari-hari',
                'kategori' => 'GLI',
                'foto' => '2.jpg'
            ],
            [
                'nama' => 'Margareta Rosemary',
                'materi' => 'Konsep Dasar dan Manfaat Penerapan Green Lifestyle dalam Kehidupan Sehari-hari',
                'kategori' => 'GLI',
                'foto' => '2.jpg'
            ],
            [
                'nama' => 'Ika Sastrosoebroto',
                'materi' => 'Keterampilan Dasar Seorang Leader Seri 1: Public Speaking dan Storytelling',
                'kategori' => 'GLI',
                'foto' => '3.jpg'
            ],
            [
                'nama' => 'Ahmad Arif',
                'materi' => 'Keterampilan Dasar Seorang Leader Seri II: (Menulis)',
                'kategori' => 'GLI',
                'foto' => '4.jpg'
            ],
            [
                'nama' => 'Dani Wahyu Munggoro',
                'materi' => 'Desigin thingking  dan Critical thinking beserta Metode aplikasinya dalam konteks permasalahan sosial dan ekologis',
                'kategori' => 'GLI',
                'foto' => '5.png'
            ],
            [
                'nama' => 'Dr. Drs. Mulyadin Malik, M.Si., CIGS',
                'materi' => 'Memahami Strategi dan Konsep Pembangunan Kota dan Desa yang Berkelanjutan',
                'kategori' => 'GLI',
                'foto' => '6.jpg'
            ],

        ]);
    }
}
