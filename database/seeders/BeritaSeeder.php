<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Berita::create([
            'idkategori'   =>  1,
            'iduser'       =>  1,
            'judul'        =>  'Ujian Sekolah di SD Kumnamu Tahun Pelajaran 2021/2022',
            'berita'       =>  'Pelaksanaan Ujian Sekolah tahun ini berbeda dengan tahun sebelumnya karena Ujian Sekolah tahun ini dilakukan oleh siswa/siswi kelas VI SD secara luar jaringan (luring). SD Kumnamu melaksanakan Ujian Sekolah bagi Kelas VI dari hari Senin, 18 April 2022 sampai dengan Jumat, 22 April 2022. Waktu pelaksanaan Ujian Sekolah untuk hari senin-kamis dilaksanakan dari pukul 07.30 WIB – 12.30 WIB sedangkan untuk hari jumat dari pukul 07.30 WIB – 11.15 WIB. Selama pelaksanaan ujian sekolah di SD Kumnamu, ujian dapat dilaksanakan dengan baik dan lancar tanpa halangan suatu apapun.',
            'gambar'       =>  'ku1.jpg',
        ]);
    }
}
