<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuncDirectionListTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('func_direction_list')->insert([
            'title' => 'Маркетинг'
        ]);

        DB::table('func_direction_list')->insert([
            'title' => 'Экология'
        ]);

        DB::table('func_direction_list')->insert([
            'title' => 'Безопасность'
        ]);

        DB::table('func_direction_list')->insert([
            'title' => 'Риски'
        ]);

        DB::table('func_direction_list')->insert([
            'title' => 'Международная деятельность'
        ]);

        DB::table('func_direction_list')->insert([
            'title' => 'Собственность и ценные бумаги'
        ]);

        DB::table('func_direction_list')->insert([
            'title' => 'Коллегиальные органы'
        ]);
    }
}
