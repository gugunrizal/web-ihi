<?php

namespace Database\Seeders;

use App\Models\Pengurus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengurusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengurus::insert([
            [
                'nama' => 'Alifian',
                'jabatan' => 'Fasilitator',
                'foto' => '1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'M Luqman A',
                'jabatan' => 'Fasilitator',
                'foto' => '2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Agus Umar Dani',
                'jabatan' => 'Fasilitator',
                'foto' => '3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
