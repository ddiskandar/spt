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
        DB::table('years')->insert([
            ['id' => 2009, 'name' => '2008/2009'],
            ['id' => 2010, 'name' => '2009/2010'],
            ['id' => 2011, 'name' => '2010/2011'],
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
            ['id' => 2022, 'name' => '2021/2022'],
            ['id' => 2023, 'name' => '2022/2023'],
            
        ]);

        DB::table('activities')->insert([
            ['name' => 'belum ada aktivitas'],
            ['name' => 'bekerja'],
            ['name' => 'melanjutkan'],
            ['name' => 'wirausaha'],
        ]);

        DB::table('settings')->insert([
            'school_name' => 'SMK Plus Al-Farhan',
            'crm_phone' => '085624343181',
            'dev_name' => 'Dede Iskandar',
            'app_version' => '0.1',
            'db_version' => '0.1',
        ]);

        DB::table('majors')->insert([
            ['slug' => 'MM', 'name' => 'Multimedia'],
            ['slug' => 'BDP', 'name' => 'Bisnis Daring dan Pemasaran'],
            ['slug' => 'APHP', 'name' => 'Agribisnis Pengolahan Hasil Pertanian'],
            ['slug' => 'PN', 'name' => 'Pemasaran'],
        ]);

        \App\Models\User::create([
            'name' => 'Dede Iskandar',
            'email' => 'dd@smkplusalfarhan.sch.id',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
        ]);

    }
}
