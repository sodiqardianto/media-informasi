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
            'berita'       =>  '<div><div>Pelaksanaan Ujian Sekolah tahun ini berbeda dengan tahun sebelumnya karena Ujian Sekolah tahun ini dilakukan oleh siswa/siswi kelas VI SD secara luar jaringan (luring). SD Kumnamu melaksanakan Ujian Sekolah bagi Kelas VI dari hari Senin, 18 April 2022 sampai dengan Jumat, 22 April 2022. Waktu pelaksanaan Ujian Sekolah untuk hari senin-kamis dilaksanakan dari pukul 07.30 WIB – 12.30 WIB sedangkan untuk hari jumat dari pukul 07.30 WIB – 11.15 WIB. Selama pelaksanaan ujian sekolah di SD Kumnamu, ujian dapat dilaksanakan dengan baik dan lancar tanpa halangan suatu apapun.</div></div>',
            'gambar'       =>  'ku1.jpg',
        ]);

        Berita::create([
            'idkategori'   =>  1,
            'iduser'       =>  1,
            'judul'        =>  'Vaksinasi Dosis Kedua Siswa/Siswi SD Kumnamu',
            'berita'       =>  '<div><div>Kamis, 20 Januari 2022, SD Kumnamu mengadakan vaksinasi dosis kedua bagi anak-anak yang sudah berumur 6-11 tahun. Kegiatan vaksinasi dilakukan di ruang Chapel pada pukul 08.00 – 11.00 WIB. SD Kumnamu juga bekerja sama kembali dengan Puskemas Panunggangan Barat untuk melakukan vaksinasi kepada anak-anak di SD Kumnamu.</div><div><br></div><div>Bebeda dengan kegiatan vaksinasi dosis pertama sebelumnya, kegiatan vaksinasi dosis kedua ini dilakukan tanpa pendampingan orang tua. Anak-anak diminta datang ke sekolah pada pukul 08.00 WIB dengan membawa syarat vaksinasi yaitu fotokopi Kartu Keluarga (KK) dan nomor telepon yang aktif. Anak-anak juga diminta untuk datang ke sekolah dengan mematuhi protokol kesehatan yaitu menggunakan masker dan menjaga jarak dengan temannya di sekolah. Anak-anak juga diminta datang ke sekolah dalam keadaan sehat dan sudah sarapan terlebih dahulu dari rumah.</div><div><br></div><div>Anak-anak melakukan vaksinasi secara bergantian sesuai kelasnya. Vaksinasi dimulai dari kelas 6 dan berakhir di kelas 1. Setelah vaksinasi selesai dilakukan, siswa diminta untuk menunggu kembali di kelas untuk observasi dan menunggu di jemput kembali oleh orang tua atau walinya.</div><div><br></div><div>Kegiatan vaksinasi dosis kedua ini diharapkan dapat membantu program pemerintah dalam pemerataan vaksinasi untuk anak-anak berumur 6-11 tahun dan juga mendukung kembalinya pembelajaran tatap muka di sekolah.</div></div>',
            'gambar'       =>  '1673747923.png',
        ]);

        Berita::create([
            'idkategori'   =>  3,
            'iduser'       =>  1,
            'judul'        =>  'Fasilitas Yang Menunjang Sekolah Kumnamu',
            'berita'       =>  '<span style="color: rgb(105, 105, 105); font-family: Roboto, sans-serif; font-size: 15px;">Kami menunjang kegiatan belajar mengajar putra dan putri Anda agar semakin nyaman dengan fasilitas yang kami sediakan yaitu:</span><br><ol><li><span style="color: rgb(105, 105, 105); font-family: Roboto, sans-serif; font-size: 15px;">Lapangan Basket</span></li><li><span style="color: rgb(105, 105, 105); font-family: Roboto, sans-serif; font-size: 15px;">Lapangan Futsal</span></li><li><span style="color: rgb(105, 105, 105); font-family: Roboto, sans-serif; font-size: 15px;">Aula Besar</span></li><li><span style="color: rgb(105, 105, 105); font-family: Roboto, sans-serif; font-size: 15px;">Ruang Audio Visual</span></li><li><span style="color: rgb(105, 105, 105); font-family: Roboto, sans-serif; font-size: 15px;">Ruang Kelas Besar</span></li></ol>',
            'gambar'       =>  '1673748962.jpg',
        ]);

        Berita::create([
            'idkategori'   =>  6,
            'iduser'       =>  1,
            'judul'        =>  'Ekstrakurikuler Yang Tersedia di Sekolah Kumnamu',
            'berita'       =>  '<div><span style="color: rgb(105, 105, 105); font-family: Roboto, sans-serif; font-size: 15px;">Kami membantu putra dan putri Anda untuk menyalurkan potensi mereka melalui kegiatan ekstrakurikuler kami yaitu:</span><br></div><div><ol><li><font color="#696969" face="Roboto, sans-serif"><span style="font-size: 15px;">Taekwondo</span></font></li><li><font color="#696969" face="Roboto, sans-serif"><span style="font-size: 15px;">Futsal</span></font></li><li><span style="color: rgb(105, 105, 105); font-family: Roboto, sans-serif; font-size: 15px;">Vocal</span></li><li><span style="color: rgb(105, 105, 105); font-family: Roboto, sans-serif; font-size: 15px;">English Conversation</span></li><li><span style="color: rgb(105, 105, 105); font-family: Roboto, sans-serif; font-size: 15px;">Dancing</span></li><li><span style="color: rgb(105, 105, 105); font-family: Roboto, sans-serif; font-size: 15px;">Guitar</span></li><li><span style="color: rgb(105, 105, 105); font-family: Roboto, sans-serif; font-size: 15px;">Keyboard</span></li></ol></div><div><span style="color: rgb(105, 105, 105); font-family: Roboto, sans-serif; font-size: 15px;"><br></span></div><div><span style="color: rgb(105, 105, 105); font-family: Roboto, sans-serif; font-size: 15px;"><br></span></div>',
            'gambar'       =>  '1673749167.jpg',
        ]);

        Berita::create([
            'idkategori'   =>  4,
            'iduser'       =>  1,
            'judul'        =>  'Jadwal Pelajaran Kelas 1',
            'berita'       =>  '<div>Berikut Rincian Jadwal Pelajaran Kelas 1&nbsp;</div>',
            'gambar'       =>  '1673749742.png',
        ]);

        Berita::create([
            'idkategori'   =>  5,
            'iduser'       =>  1,
            'judul'        =>  'Jadwal Ujian Sekolah Kumnamu',
            'berita'       =>  '<div>Berikut Rincian Ujian Sekolah Kumnamu</div>',
            'gambar'       =>  '1673750417.png',
        ]);

        Berita::create([
            'idkategori'   =>  7,
            'iduser'       =>  1,
            'judul'        =>  'Penerimaan Peserta Didik Baru',
            'berita'       =>  '1. Mengisi Formulir Pendaftaran Daring<br><div>Pengisian formulir sesuai dengan jenjang sekolah yang diinginkan (TK, SD, SMP atau SMA). Lakukan pengisian data secara benar berupa email aktif, data siswa, data orang tua / wali, data wawancara dan tes online (untuk SMP dan SMA).</div><div><br></div><div>2. Menerima Bukti Pendaftaran melalui Email</div><div>Pada Kotak Masuk Email Anda akan dikirimkan berupa file PDF sebagai tanda pendaftaran. Simpan file tersebut sebagai bukti pendaftaran dan pihak sekolah akan menghubungi Anda.<br></div><div><br></div><div>3.&nbsp;Mengikuti tes penerimaan sesuai dengan jenjang sekolah</div><div>Tes online hanya dilakukan untuk jenjang SMP dan SMA. Jenjang lainnya mengikuti kebijakan dari Kepala Sekolah pada jenjang tersebut.<br></div><div><br></div><div>4. Wawancara Keuangan</div><div>Pada tahap ini, kesepakatan biaya pendidikan dari pihak sekolah dengan orang tua/wali calon peserta didik baru.<br></div><div><br></div><div><br></div><div>Jika Anda memiliki pertanyaan atau masalah selama proses pendaftaran, silakan kirim email kepada kami di <b>info@kumnamu.sch.id</b><br></div>',
            'gambar'       =>  '1673750793.jpg',
        ]);

        Berita::create([
            'idkategori'   =>  2,
            'iduser'       =>  1,
            'judul'        =>  'Program Unggulan yang ada di Sekolah Kumnamu',
            'berita'       =>  '<div><div>Salah satu program unggulan sekolah adalah kegiatan literasi bahasa dan &nbsp;pembimbingan riset. Kegiatan ini diharapkan bisa efektif dalam upaya meningkatkan hasil belajar peserta didik dan memberikan pengalaman bermakna, serta menumbuhkan karakter karakter positif pada diri peserta didik. Hal ini seiring dengan pendapat beberapa ahli pendidikan yang menyatakan bahwa pembelajaran keterampilan akan efektif bila dilakukan dengan menggunakan prinsip belajar sambil mengerjakan&nbsp; atau&nbsp;&nbsp;<em>learning by doing (</em>Mills,1977). Menurut Leighbody (1968) menjelaskan keterampilan yang dilatih melalui praktik secara berulang-ulang akan menjadi kebiasaan yang otomatis dilakukan. Sementara itu Goetz (1981) dalam penelitiannya melaporkan bahwa latihan yang dilakukan berulang-ulang akan memberikan pengaruh yang sangat besar menghasilkan prestasi belajar yang tinggi, diperlukan umpan balik yang relevan yang berfungsi untuk memantapkan kebiasaan yang tidak pernah mati atau hilang.</div><div><br></div><div>Kegiatan literasi bahasa maupun pembimbingan riset di sekolah dilakukan secara daring dengan pendampingan guru sesuai keahliannya serta kerjasama dengan beberapa pihak luar antara lain dosen&nbsp; dan&nbsp; tim pembina riset. Kegiatan literasi bahasa meliputi&nbsp; Bahasa Indonesia, Jawa, Arab,&nbsp;<em>Story Telling, News Reading,</em>dan&nbsp;<em>Speech</em>. Kegiatan literasi tersebut diberikan pada siswa kelas X pada hari Rabu. Sedangkan pembimbingan riset diberikan pada siswa kelas XI, setiap hari Selasa. Pemantauan atau pun penilain pada kegiatan ini dilakukan secara berkala dengan hasil produk disesuaikan dengan target yang dirancang. (Ema/Ari)</div></div>',
            'gambar'       =>  '1673751042.jpg',
        ]);
    }
}
