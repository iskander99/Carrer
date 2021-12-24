<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndustriesListTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('industries_list')->insert([
            'title' => 'Здравоохранение'
        ]);

        DB::table('industries_list')->insert([
            'title' => 'Информационные и коммуникационные технологии'
        ]);

        DB::table('industries_list')->insert([
            'title' => 'Культура и искусство'
        ]);

        DB::table('industries_list')->insert([
            'title' => 'Легкая и текстильная промышленность'
        ]);

        DB::table('industries_list')->insert([
            'title' => 'Лесное хозяйство, охота'
        ]);

        DB::table('industries_list')->insert([
            'title' => 'Металлургическое производство'
        ]);

        DB::table('industries_list')->insert([
            'title' => 'Нанотехнологии'
        ]);
    }
}
