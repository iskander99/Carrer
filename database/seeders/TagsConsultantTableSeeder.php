<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsConsultantTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('tags_cons')->insert([
            'title' => 'Любой кандидат',
            'description' => 'Описание'
        ]);

        DB::table('tags_cons')->insert([
            'title' => 'Кандидат с ожидаемым доходом до 50 000',
            'description' => 'Описание'
        ]);

        DB::table('tags_cons')->insert([
            'title' => 'Кандидат с ожидаемым доходом от 50 000 до 100 000',
            'description' => 'Описание'
        ]);

        DB::table('tags_cons')->insert([
            'title' => 'Кандидат с ожидаемым доходом от 100 000 до 200 000',
            'description' => 'Описание'
        ]);

        DB::table('tags_cons')->insert([
            'title' => 'Кандидат с ожидаемым доходом от 200 000 до 300 000',
            'description' => 'Описание'
        ]);

        DB::table('tags_cons')->insert([
            'title' => 'Кандидат с ожидаемым доходом от 300 000 до 400 000',
            'description' => 'Описание'
        ]);

        DB::table('tags_cons')->insert([
            'title' => 'Кандидат с ожидаемым доходом от 400 000 до 500 000',
            'description' => 'Описание'
        ]);

        DB::table('tags_cons')->insert([
            'title' => 'Кандидат с ожидаемым доходом от 500 000 до 700 000',
            'description' => 'Описание'
        ]);

        DB::table('tags_cons')->insert([
            'title' => 'Кандидат с ожидаемым доходом от 700 000 до 1 000 000',
            'description' => 'Описание'
        ]);

        DB::table('tags_cons')->insert([
            'title' => 'Кандидат с ожидаемым доходом свыше 1 000 000',
            'description' => 'Описание'
        ]);

        DB::table('tags_cons')->insert([
            'title' => 'Кандидат по функциональному направлению',
            'description' => 'Описание'
        ]);

        DB::table('tags_cons')->insert([
            'title' => 'Кандидат ТОП-менеджер',
            'description' => 'Описание'
        ]);

        DB::table('tags_cons')->insert([
            'title' => 'Кандидат среднее звено',
            'description' => 'Описание'
        ]);

        DB::table('tags_cons')->insert([
            'title' => 'Кандидат ключевой специалист/ЛМ',
            'description' => 'Описание'
        ]);

        DB::table('tags_cons')->insert([
            'title' => 'Кандидат из региона',
            'description' => 'Описание'
        ]);

        DB::table('tags_cons')->insert([
            'title' => 'Кандидат из отрасли',
            'description' => 'Описание'
        ]);

        DB::table('tags_cons')->insert([
            'title' => 'Функциональная рассылка',
            'description' => 'Описание'
        ]);

        DB::table('tags_cons')->insert([
            'title' => 'Консультант из ТОП-100',
            'description' => 'Описание'
        ]);

        DB::table('tags_cons')->insert([
            'title' => 'Выбранный консультант из ТОП-100',
            'description' => 'Описание'
        ]);
    }
}
