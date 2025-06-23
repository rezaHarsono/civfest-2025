<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Competition;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Competition::create([
        //     'judul_lomba' => 'NATIONAL BUILDING MOCKUP DESIGN COMPETITION',
        //     'deskripsi_lomba' => 'National Building Mockup Design Competition Civil Engineering Festival 2024 is a competition that will bring the theme “Build Open and Environmentally Friendly Spaces”.',
        //     'link_daftar' => 'https://bit.ly/RegistrasiNBMDCCIVFEST2024',
        //     'harga_masuk' => 'Rp. 150.000,00/team'
        // ]);

        // Competition::create([
        //     'judul_lomba' => 'NATIONAL PROJECT COST ESTIMATION COMPETITION',
        //     'deskripsi_lomba' => 'National Project Cost Estimation Competition Civil Engineering Festival 2024 is a competition that will bring the theme “Efficiency in Planning that Prioritizes Economic Value and Productivity".',
        //     'link_daftar' => 'https://bit.ly/PENDAFTARANNPCECCIVFEST2024',
        //     'harga_masuk' => 'Rp. 185.000,00/team'
        // ]);

        // Competition::create([
        //     'judul_lomba' => 'NATIONAL BRIDGE DESIGN COMPETITION',
        //     'deskripsi_lomba' => 'National Bridge Design Competition Civil Engineering Festival 2024 is a competition that will bring the theme “Sustainable Bridge Innovation”.',
        //     'link_daftar' => 'https://bit.ly/PENDAFTARANNBDCCIVFEST2024',
        //     'harga_masuk' => 'Rp. 185.000,00/team'
        // ]);

        // Competition::create([
        //     'judul_lomba' => 'NATIONAL CONCRETE COMPETITION',
        //     'deskripsi_lomba' => 'National Concrete Competition Civil Engineering Festival 2024 is a competition that will bring the theme"Beton Ringan Kuat Tepat 25 Mpa dengan Inovasi Bahan Limbah Anorganik".',
        //     'link_daftar' => 'http://tiny.cc/PendaftaranNCCcivfest2024',
        //     'harga_masuk' => 'Rp. 185.000,00/team'
        // ]);
    }
}