<?php

namespace Database\Seeders;

use App\Models\Pesan;
use Illuminate\Database\Seeder;

class PesanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pesan::create([
            'nama' => 'John Doe',
            'isipesan' => 'Biaya total untuk pendaftaran?',
            'email' => 'johndoe@gmail.com',
            'notelp' => '081234567890',
            'status' => 0,
        ]);
    }
}
