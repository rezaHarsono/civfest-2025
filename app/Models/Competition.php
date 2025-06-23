<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Competition
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'national-building-mockup-design-competition',
                'singkatan_lomba' => 'NBMDC',
                'judul_lomba' => 'National Building Mockup Design Competition',
                'logo' => 'NBMDC.png',
                'deskripsi_lomba' => 'National Building Mockup Design Competition Civil Engineering Festival 2025 is a competition that will bring the theme “Green Architectural Design to Achieve a Comfortable and Safe Residential Building”.',
                'link_daftar' => 'https://bit.ly/NBMDC_CIVFEST2025',
                'link_tor' => 'https://drive.google.com/drive/folders/1a33ZC_AGo7sUwb4mPXzNavJ5Qjd3oY3P?usp=drive_link',
                'harga_masuk' => 'Rp. 150.000,00/team',
                'prize' => '6 Million Rupiah'
            ],

            [
                'id' => 2,
                'slug' => 'national-project-tender-competition',
                'singkatan_lomba' => 'NPTC',
                'judul_lomba' => 'National Project Tender Competition',
                'logo' => 'NPTC.png',
                'deskripsi_lomba' => 'NPTC (National Project Tender Competition) Civil Engineering Festival 2025 is a competition that will bring the theme “Construction Management Strategy in Realizing Economical and Resilient Infrastructure”.',
                'link_daftar' => 'https://bit.ly/NPTC_CIVFEST2025',
                'link_tor' => 'https://drive.google.com/drive/folders/1a33ZC_AGo7sUwb4mPXzNavJ5Qjd3oY3P?usp=drive_link',
                'harga_masuk' => 'Rp. 200.000,00/team',
                'prize' => '9 Million Rupiah'
            ],

            [
                'id' => 3,
                'slug' => 'national-bridge-competition',
                'singkatan_lomba' => 'NBDC',
                'judul_lomba' => 'National Bridge Design Competition',
                'logo' => 'NBDC.png',
                'deskripsi_lomba' => 'NBDC (National Bridge Design Competition) Civil Engineering Festival 2025 is a competition that will bring the theme “Bridge Design and Innovation Strategies for Future Resiliency”.',
                'link_daftar' => 'https://bit.ly/NBDC_CIVFEST2025',
                'link_tor' => 'https://drive.google.com/drive/folders/1a33ZC_AGo7sUwb4mPXzNavJ5Qjd3oY3P?usp=drive_link',
                'harga_masuk' => 'Rp. 200.000,00/team',
                'prize' => '9 Million Rupiah'
            ],

            [
                'id' => 4,
                'slug' => 'national-concrete-competition',
                'singkatan_lomba' => 'NCC',
                'judul_lomba' => 'National Concrete Competition',
                'logo' => 'NCC.png',
                'deskripsi_lomba' => 'NCC (National Concrete Competition) Civil Engineering Festival 2025 is a competition that will bring the theme " Fiber Potential Innovation to Create an Improvement Concrete Construction".',
                'link_daftar' => 'https://bit.ly/NCC_CIVFEST2025',
                'link_tor' => 'https://drive.google.com/drive/folders/1a33ZC_AGo7sUwb4mPXzNavJ5Qjd3oY3P?usp=drive_link',
                'harga_masuk' => 'Rp. 200.000,00/team',
                'prize' => '9 Million Rupiah'
            ],

            [
                'id' => 5,
                'slug' => 'natioanal-bridge-design-competition',
                'singkatan_lomba' => 'NBC',
                'judul_lomba' => 'National BIM Competition',
                'logo' => 'NBC.png',
                'deskripsi_lomba' => 'NBC (National BIM Competition) Civil Engineering Festival 2025 is a competition that will bring the theme "BIM Optimization of Building Design to Advancing Infrastructure Resiliency and Sustainability".',
                'link_daftar' => 'https://bit.ly/NBC_CIVFEST2025',
                'link_tor' => 'https://drive.google.com/drive/folders/1a33ZC_AGo7sUwb4mPXzNavJ5Qjd3oY3P?usp=drive_link',
                'harga_masuk' => 'Rp. 200.000,00/team',
                'prize' => '9 Million Rupiah'
            ],




        ];
    }

    public static function find($slug)
    {
        return Arr::first(static::all(), function ($competition) use ($slug) {
            return $competition['slug'] == $slug;
        });
    }
}
