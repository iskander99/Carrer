<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsListTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('regions_list')->insert([
            'title' => 'Адыгея'
        ]);

        DB::table('regions_list')->insert([
            'title' => 'Башкортостан'
        ]);

        DB::table('regions_list')->insert([
            'title' => 'Бурятия'
        ]);

        DB::table('regions_list')->insert([
            'title' => 'Алтай'
        ]);

        DB::table('regions_list')->insert([
            'title' => 'Дагестан'
        ]);

        DB::table('regions_list')->insert([
            'title' => 'Ингушетия'
        ]);

        DB::table('regions_list')->insert([
            'title' => 'Калмыкия'
        ]);
    }
}
