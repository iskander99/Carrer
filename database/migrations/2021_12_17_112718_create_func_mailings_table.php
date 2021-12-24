<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncMailingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('func_mailings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('income_level')->nullable();
            $table->unsignedBigInteger('structure_level')->nullable();
            $table->unsignedBigInteger('func_direction')->nullable();
            $table->unsignedBigInteger('industry')->nullable();
            $table->unsignedBigInteger('region')->nullable();
            $table->timestamps();

            $table->index('user_id', 'func_mailings_user_idx');
            $table->foreign('user_id', 'func_mailings_user_fk')->on('users')->references('id');

            $table->index('income_level', 'func_mailings_income_level_idx');
            $table->foreign('income_level', 'func_mailings_income_level_fk')->on('salary_level_list')->references('id');

            $table->index('structure_level', 'func_mailings_structure_level_idx');
            $table->foreign('structure_level', 'func_mailings_structure_level_fk')->on('structure_level_list')->references('id');

            $table->index('func_direction', 'func_mailings_func_direction_idx');
            $table->foreign('func_direction', 'func_mailings_func_direction_fk')->on('func_direction_list')->references('id');

            $table->index('industry', 'func_mailings_industry_idx');
            $table->foreign('industry', 'func_mailings_industry_fk')->on('industries_list')->references('id');

            $table->index('industry', 'func_mailings_region_idx');
            $table->foreign('industry', 'func_mailings_region_fk')->on('regions_list')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('func_mailings', function (Blueprint $table) {
            $table->dropForeign('func_mailings_user_fk');
            $table->dropIndex('func_mailings_user_idx');

            $table->dropForeign('func_mailings_income_level_fk');
            $table->dropIndex('func_mailings_income_level_idx');

            $table->dropForeign('func_mailings_structure_level_fk');
            $table->dropIndex('func_mailings_structure_level_idx');

            $table->dropForeign('func_mailings_func_direction_fk');
            $table->dropIndex('func_mailings_func_direction_idx');

            $table->dropForeign('func_mailings_industry_fk');
            $table->dropIndex('func_mailings_industry_idx');

            $table->dropForeign('func_mailings_region_fk');
            $table->dropIndex('func_mailings_region_idx');
        });

        Schema::dropIfExists('func_mailings');
    }
}
