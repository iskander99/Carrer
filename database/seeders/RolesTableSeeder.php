<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            'title' => 'Кандидат',
            'description' => 'Описание'
        ]);

        DB::table('roles')->insert([
            'title' => 'Консультант',
            'description' => 'Описание'
        ]);

        DB::table('roles')->insert([
            'title' => 'Консьерж',
            'description' => 'Описание'
        ]);
    }
}
