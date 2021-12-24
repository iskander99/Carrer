<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(TagsCandidateTableSeeder::class);
        $this->call(TagsConsultantTableSeeder::class);
        $this->call(EduLevelListTableSeeder::class);
        $this->call(FuncDirectionListTableSeeder::class);
        $this->call(IndustriesListTableSeeder::class);
        $this->call(ProfFieldListTableSeeder::class);
        $this->call(RegionsListTableSeeder::class);
        $this->call(StructureLevelListTableSeeder::class);
        $this->call(SalaryLevelListTableSeeder::class);
    }
}
