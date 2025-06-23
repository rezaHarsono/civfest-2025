<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Past;

class PastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Past::create([
            'nama_event' => 'Civfest 2016',
            'tema_event' => 'Aspirasi Junjungan Nusantara',
            'tahun_event' => 2016,
            'slug' => 'Civfest-2016'
        ]);

        Past::create([
            'nama_event' => 'Civfest 2017',
            'tema_event' => 'Talenta Nusantara bagi Lingkungan Masa Depan',
            'tahun_event' => 2017,
            'slug' => 'Civfest-2017'
        ]);

        Past::create([
            'nama_event' => 'Civfest 2018',
            'tema_event' => 'Mengeksplorasi Talenta Wujudkan Aspirasi Inovatif',
            'tahun_event' => 2018,
            'slug' => 'Civfest-2018'
        ]);

        Past::create([
            'nama_event' => 'Civfest 2019',
            'tema_event' => 'Ekspresi Sang Pembaharu',
            'tahun_event' => 2019,
            'slug' => 'Civfest-2019'
        ]);

        Past::create([
            'nama_event' => 'Civfest 2020',
            'tema_event' => 'Warnai Masa Depan dengan Perubahan',
            'tahun_event' => 2020,
            'slug' => 'Civfest-2020'
        ]);

        Past::create([
            'nama_event' => 'Civfest 2021',
            'tema_event' => 'Better Living for Better Future',
            'tahun_event' => 2021,
            'slug' => 'Civfest-2021'
        ]);

        Past::create([
            'nama_event' => 'Civfest 2022',
            'tema_event' => 'Together Make a Great Future',
            'tahun_event' => 2022,
            'slug' => 'Civfest-2022'
        ]);

        Past::create([
            'nama_event' => 'Civfest 2023',
            'tema_event' => 'Comfortable Living for Everyone',
            'tahun_event' => 2023,
            'slug' => 'Civfest-2023'
        ]);

        Past::create([
            'nama_event' => 'Civfest 2024',
            'tema_event' => 'Going Stable with Sustainable',
            'tahun_event' => 2024,
            'slug' => 'Civfest-2024'
        ]);
    }
}
