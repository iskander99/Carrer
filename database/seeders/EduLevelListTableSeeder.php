<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EduLevelListTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('edu_level_list')->insert([
            'title' => 'Среднее профессиональное образование'
        ]);

        DB::table('edu_level_list')->insert([
            'title' => 'Высшее образование – бакалавриат'
        ]);

        DB::table('edu_level_list')->insert([
            'title' => 'Высшее образование – специалитет'
        ]);

        DB::table('edu_level_list')->insert([
            'title' => 'Высшее образование – магистратура'
        ]);
    }
}
