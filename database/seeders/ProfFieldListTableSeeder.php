<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfFieldListTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('prof_field_list')->insert([
            'title' => 'Социальное обслуживание'
        ]);

        DB::table('prof_field_list')->insert([
            'title' => 'Культура, искусство'
        ]);

        DB::table('prof_field_list')->insert([
            'title' => 'Физическая культура и спорт'
        ]);
    }
}
