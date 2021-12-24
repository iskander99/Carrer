<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultantInfoIndustryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cons_info_industry', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_consultation_info_id');
            //$table->integer('industry_id');
            $table->unsignedBigInteger('industry_id');

            $table->index('user_consultation_info_id', 'users_cons_info_industry_idx');
            $table->foreign('user_consultation_info_id', 'user_cons_info_industry_fk')->on('users_cons_info')->references('id');

            $table->index('industry_id', 'users_industry_idx');
            $table->foreign('industry_id', 'user_industry_fk')->on('industries_list')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cons_info_industry', function (Blueprint $table) {
            $table->dropForeign('user_cons_info_industry_fk');
            $table->dropIndex('users_cons_info_industry_idx');

            $table->dropForeign('user_industry_fk');
            $table->dropIndex('users_industry_idx');
        });

        Schema::dropIfExists('cons_info_industry');
    }
}
