<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StructureLevelListTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('structure_level_list')->insert([
            'title' => 'Начальник отдела снабжения',
            'description' => 'Описание'
        ]);

        DB::table('structure_level_list')->insert([
            'title' => 'Начальник отдела продаж',
            'description' => 'Описание'
        ]);

        DB::table('structure_level_list')->insert([
            'title' => 'Главный бухгалтер',
            'description' => 'Описание'
        ]);
    }
}
