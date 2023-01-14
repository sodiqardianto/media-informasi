<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            'namakategori' => 'Sekolah',
        ]);

        Kategori::create([
            'namakategori' => 'Program Unggulan',
        ]);

        Kategori::create([
            'namakategori' => 'Fasilitas',
        ]);
        
        Kategori::create([
            'namakategori' => 'Jadwal Pelajaran',
        ]);

        Kategori::create([
            'namakategori' => 'Jadwal Ujian',
        ]);

        Kategori::create([
            'namakategori' => 'Ekstrakurikuler',
        ]);

        Kategori::create([
            'namakategori' => 'Pendaftaran',
        ]);
    }
}
