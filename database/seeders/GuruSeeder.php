<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Guru::create([
            'namaguru' => 'Budi Sudarsono',
            'nipn' => '1234567890',
            'pendidikanterakhir' => 'S1',
            'keahlianbahasa' => 'Bahasa Indonesia',
            'picture' => 'fotoku.png',
        ]);
    }
}
