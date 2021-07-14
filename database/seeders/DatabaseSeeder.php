<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert([
            ['id' => 1, 'name' => 'belum ada aktivitas'],
            ['id' => 2, 'name' => 'bekerja'],
            ['id' => 3, 'name' => 'melanjutkan'],
            ['id' => 4, 'name' => 'wirausaha'],
            ['id' => 99, 'name' => 'belum diisi', ],
        ]);

        DB::table('bonds')->insert([
            ['name' => 'Tetap'],
            ['name' => 'Kontrak'],
            ['name' => 'Freelance'],
            ['name' => 'Profesional'],
            ['name' => 'Pejabat Publik'],
            ['name' => 'Usaha Sendiri'],
            ['name' => 'Lainnya'],
        ]);

        DB::table('businesses')->insert([
            ['name' => 'Angkutan air'],
            ['name' => 'Angkutan darat dan melalui pipa'],
            ['name' => 'Angkutan udara'],
            ['name' => 'Ind. Alat Angkutan Lainnya'],
            ['name' => 'Ind. Bahan Kimia'],
            ['name' => 'Ind. Barang Galian Bukan Logan'],
            ['name' => 'Ind. Barang Logam, Bukan Mesin'],
            ['name' => 'Ind. Farmasi'],
            ['name' => 'Ind. Furnitur'],
            ['name' => 'Ind. Karet dan Plastik'],
            ['name' => 'Ind. Kayu dan Gabus'],
            ['name' => 'Ind. Kendaraan Bermotor'],
            ['name' => 'Ind. Kertas dan Barang dari Kertas'],
            ['name' => 'Ind. Komputer, Brg Elektronik dan Optik'],
            ['name' => 'Ind. Kulit, dan Alas Kaki'],
            ['name' => 'Ind. Logam Dasar'],
            ['name' => 'Ind. Makanan'],
            ['name' => 'Ind. Mesin dan Perlengkapan ytdl'],
            ['name' => 'Ind. Minuman'],
            ['name' => 'Ind. Pakaian Jadi'],
            ['name' => 'Ind. Pencetakan dan Repr. Media Rekaman'],
            ['name' => 'Ind. Pengolahan Lainnya'],
            ['name' => 'Ind. Pengolahan Tembakau'],
            ['name' => 'Ind. Peralatan Listrik'],
            ['name' => 'Ind. Prod Bt Bara, Kilang Minyak Bumi'],
            ['name' => 'Ind. Tekstil'],
            ['name' => 'Jasa Pengelolaan Sampah Lain'],
            ['name' => 'Jasa Reparasi Mesin'],
            ['name' => 'Kehutanan dan Penbangan Kayu'],
            ['name' => 'Konstruksi Bangunan Sipil'],
            ['name' => 'Konstruksi Gedung'],
            ['name' => 'Konstruksi Khusus'],
            ['name' => 'Penerbitan'],
            ['name' => 'Pengadaan Air'],
            ['name' => 'Pengadaan Listrik, Gas, Uap'],
            ['name' => 'Pengadaan Limbah'],
            ['name' => 'Pengadaan Sampah dan Daur Ulang'],
            ['name' => 'Penyediaan Makanan dan Minuman'],
            ['name' => 'Penyiaran dan Pemrograman'],
            ['name' => 'Perdagangan Besar, Bukan Mobil'],
            ['name' => 'Perdagangan Eceran, Bukan Mobil'],
            ['name' => 'Perdagangan Mobil dan Sepeda Motor'],
            ['name' => 'Pergudangan dan Jasa Penunjang Angkutan'],
            ['name' => 'Perikanan'],
            ['name' => 'Pertanian, Peternakan, Perburuan'],
            ['name' => 'Pos dan Kurir'],
            ['name' => 'Produksi Video dan Musik'],
            ['name' => 'Tmbg Batu Bara dan Lignit'],
            ['name' => 'Tmbg Mnyk Bumi, Gas Alam, Panas Bumi'],
            ['name' => 'Administrasi Pemerintahan, Pertahanan'],
            ['name' => 'Asuransi dan Dana Pensiun'],
            ['name' => 'Jasa Administrasi Kantor'],
            ['name' => 'Jasa Agen Perjalanan'],
            ['name' => 'Jasa Arsitektur dan Teknik Sipil'],
            ['name' => 'Jasa Hukum dan Akuntansi'],
            ['name' => 'Jasa Keamanan dan Penyelidikan'],
            ['name' => 'Jasa Kegiatan Sosial di Dalam Panti'],
            ['name' => 'Jasa Kegiatan Sosial di Luar Panti'],
            ['name' => 'Jasa Kesehatan Hewan'],
            ['name' => 'Jasa Kesehatan Manusia'],
            ['name' => 'Jasa Ketenagakerjaan'],
            ['name' => 'Jasa Keuangan'],
            ['name' => 'Jasa Pendidikan'],
            ['name' => 'Jasa Penunjang Jasa Keuangan'],
            ['name' => 'Jasa Perorangan Lainnya'],
            ['name' => 'Jasa Perorangan yg Melayani Rmh Tangga'],
            ['name' => 'Jasa Persewaan'],
            ['name' => 'Jasa Pertambangan'],
            ['name' => 'Jasa Profesional, Ilmiah dan Teknis'],
            ['name' => 'Jasa Reparasi Komputer'],
            ['name' => 'Jasa Untuk Gedung dan Pertamanan'],
            ['name' => 'Keg. Badan Internasional lain'],
            ['name' => 'Keg. Rmh Tangga yang digunakan sendiri'],
            ['name' => 'Kegiatan Hiburan, Kesenian'],
            ['name' => 'Kegiatan Jasa Informasi'],
            ['name' => 'Kegiatan Keanggotaan Organisasi'],
            ['name' => 'Kegiatan Konsultasi Manajemen'],
            ['name' => 'Kegiatan Olahraga dan Rekreasi'],
            ['name' => 'Kegiatan Pemrograman'],
            ['name' => 'Penelitian Ilmu Pengetahuan'],
            ['name' => 'Periklanan dan Penelitian Pasar'],
            ['name' => 'Kegiatan Pemrograman'],
            ['name' => 'Penelitian Ilmu Pengetahuan'],
            ['name' => 'Periklanan dan Penelitian Pasar'],
            ['name' => 'Perpustakaan, Arsip, Museum'],
            ['name' => 'Real Estat'],
            ['name' => 'Telekomunikasi'],
            ['name' => 'Tmbg Bijih Logam'],
            ['name' => 'Tmbg dan Penggalian Lainnya'],
        ]);

        DB::table('dudikas')->insert([
            ['name' => 'Alfa Pudoki', 'address' => 'Sukabumi'],
            ['name' => 'Sudinar Artha', 'address' => 'Bandung'],
            ['name' => 'PT. Maju Berkah Bersama', 'address' => 'Sukabumi'],
        ]);

        DB::table('incomes')->insert([
            ['name' => 'Kurang dari Rp. 500.000'],
            ['name' => 'Rp. 500.000 - Rp. 999.000'],
            ['name' => 'Rp. 1.000.000 - Rp. 1.999.000'],
            ['name' => 'Rp. 2.000.000 - Rp. 4.999.000'],
            ['name' => 'Rp. 5.000.000 - Rp. 20.000.000'],
            ['name' => 'Lebih dari Rp. 20.000.000'],
            ['name' => 'Tidak berpenghasilan'],
        ]);

        DB::table('majors')->insert([
            ['slug' => 'MM', 'name' => 'Multimedia'],
            ['slug' => 'BDP', 'name' => 'Bisnis Daring dan Pemasaran'],
            ['slug' => 'APHP', 'name' => 'Agribisnis Pengolahan Hasil Pertanian'],
            ['slug' => 'PN', 'name' => 'Pemasaran'],
        ]);

        DB::table('professions')->insert([
            ['name' => 'Nelayan'],
            ['name' => 'Petani'],
            ['name' => 'Peternak'],
            ['name' => 'PNS/TNI/Polri'],
            ['name' => 'Karyawan swasta'],
            ['name' => 'Pedagang kecil'],
            ['name' => 'Pedagang besar'],
            ['name' => 'Wiraswasta'],
            ['name' => 'Wirausaha'],
            ['name' => 'Buruh'],
            ['name' => 'Pensiunan'],
            ['name' => 'Tenaga Kerja Indonesia'],
            ['name' => 'Tidak dapat diterapkan'],
            ['name' => 'Lainnya'],
        ]);

        DB::table('settings')->insert([
            'school_name' => 'SMK Plus Al-Farhan',
            'crm_phone' => '085624343181',
            'dev_name' => 'Dede Iskandar',
            'app_version' => '0.1',
            'db_version' => '0.1',
        ]);

        DB::table('years')->insert([
            ['id' => 2012, 'name' => '2011/2012'],
            ['id' => 2013, 'name' => '2012/2013'],
            ['id' => 2014, 'name' => '2013/2014'],
            ['id' => 2015, 'name' => '2014/2015'],
            ['id' => 2016, 'name' => '2015/2016'],
            ['id' => 2017, 'name' => '2016/2017'],
            ['id' => 2018, 'name' => '2017/2018'],
            ['id' => 2019, 'name' => '2018/2019'],
            ['id' => 2020, 'name' => '2019/2020'],
            ['id' => 2021, 'name' => '2020/2021'],

        ]);

        \App\Models\User::create([
            'name' => 'Dede Iskandar',
            'email' => 'dd@smkplusalfarhan.sch.id',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
        ]);

    }
}
