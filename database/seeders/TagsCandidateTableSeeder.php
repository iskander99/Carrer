<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsCandidateTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('tags_cand')->insert([
            'title' => 'Бесплатная консультация',
            'description' => 'Описание'
        ]);

        DB::table('tags_cand')->insert([
            'title' => 'Консультация из рейтинга Топ-100',
            'description' => 'Описание'
        ]);

        DB::table('tags_cand')->insert([
            'title' => 'Консультация по региону',
            'description' => 'Описание'
        ]);

        DB::table('tags_cand')->insert([
            'title' => 'Консультация по отрасли',
            'description' => 'Описание'
        ]);

        DB::table('tags_cand')->insert([
            'title' => 'Консультация женщины',
            'description' => 'Описание'
        ]);

        DB::table('tags_cand')->insert([
            'title' => 'VIP пакет',
            'description' => 'Описание'
        ]);
    }
}
