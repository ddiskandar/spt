<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
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
        DB::table('years')->insert([
            ['name' => '2020/2021'],
            ['name' => '2019/2020'],
            ['name' => '2018/2019'],
            ['name' => '2017/2018'],
            ['name' => '2016/2017'],
        ]);

        $major1 = \App\Models\Major::create(['name' => 'Multimedia']);
        $major2 = \App\Models\Major::create(['name' => 'Bisnis Daring dan Pemasaran']);
        $major3 = \App\Models\Major::create(['name' => 'Agribisnis Pengolahan Hasil Pertanian']);

        for ($i=1; $i<=100; $i++) {
            \App\Models\Student::factory()->create([
                'user_id' => \App\Models\User::factory()->create(),
                'year_id' => \App\Models\Year::find(1)->first(),
                'major_id' => $major1,
            ]);
        }

        for ($i = 1; $i <= 80; $i++) {
            \App\Models\Student::factory()->create([
                'user_id' => \App\Models\User::factory()->create(),
                'year_id' => \App\Models\Year::find(1)->first(),
                'major_id' => $major2,
            ]);
        }

        for ($i = 1; $i <= 50; $i++) {
            \App\Models\Student::factory()->create([
                'user_id' => \App\Models\User::factory()->create(),
                'year_id' => \App\Models\Year::find(1)->first(),
                'major_id' => $major3,
            ]);
        }

        for ($i = 1; $i <= 100; $i++) {
            \App\Models\Student::factory()->create([
                'user_id' => \App\Models\User::factory()->create(),
                'year_id' => 2,
                'major_id' => $major1,
            ]);
        }

        for ($i = 1; $i <= 80; $i++) {
            \App\Models\Student::factory()->create([
                'user_id' => \App\Models\User::factory()->create(),
                'year_id' => 2,
                'major_id' => $major2,
            ]);
        }

        for ($i = 1; $i <= 50; $i++) {
            \App\Models\Student::factory()->create([
                'user_id' => \App\Models\User::factory()->create(),
                'year_id' => 2,
                'major_id' => $major3,
            ]);
        }

    }
}
