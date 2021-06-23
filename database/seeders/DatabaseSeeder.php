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
            ['name' => '2009'],
            ['name' => '2010'],
            ['name' => '2011'],
            ['name' => '2012'],
            ['name' => '2013'],
            ['name' => '2014'],
            ['name' => '2015'],
            ['name' => '2016'],
            ['name' => '2017'],
            ['name' => '2018'],
            ['name' => '2019'],
            ['name' => '2020'],
            ['name' => '2021'],
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
            ['name' => 'Multimedia'],
            ['name' => 'Bisnis Daring dan Pemasaran'],
            ['name' => 'Agribisnis Pengolahan Hasil Pertanian'],
        ]);

        \App\Models\User::create([
            'name' => 'Dede Iskandar',
            'email' => 'dd@smkplusalfarhan.sch.id',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
        ]);

        for ($i=1; $i<100000; $i++) {
            \App\Models\Student::factory()->create([
                'year_id' => \App\Models\Year::find(1)->first(),
                'major_id' => rand(1,3),
                'uuid' => Str::uuid(),
                'nipd' => rand(1111111111, 2222222222),
            ]);
        }

    }
}
