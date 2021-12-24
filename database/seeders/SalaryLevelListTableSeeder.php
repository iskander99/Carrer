<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalaryLevelListTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('salary_level_list')->insert([
            'title' => 'до 50 000 ₽'
        ]);

        DB::table('salary_level_list')->insert([
            'title' => 'от 50 000 ₽ до 100 000 ₽'
        ]);

        DB::table('salary_level_list')->insert([
            'title' => 'от 100 000 ₽ до 200 000 ₽'
        ]);

        DB::table('salary_level_list')->insert([
            'title' => 'от 200 000 ₽ до 300 000 ₽'
        ]);

        DB::table('salary_level_list')->insert([
            'title' => 'от 300 000 ₽ до 400 000 ₽'
        ]);

        DB::table('salary_level_list')->insert([
            'title' => 'от 400 000 ₽ до 500 000 ₽'
        ]);

        DB::table('salary_level_list')->insert([
            'title' => 'от 500 000 ₽ до 700 000 ₽'
        ]);

        DB::table('salary_level_list')->insert([
            'title' => 'от 700 000 ₽ до 1 000 000 ₽'
        ]);

        DB::table('salary_level_list')->insert([
            'title' => 'свыше 1 000 000 ₽'
        ]);
    }
}
