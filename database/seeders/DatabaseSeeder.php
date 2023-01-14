<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\Kategori;
use App\Models\Pesan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            RolePermissionSeeder::class,
            UserSeeder::class,
            KategoriSeeder::class,
            BeritaSeeder::class,
            GuruSeeder::class,
            PesanSeeder::class,
        ]);
    }
}
