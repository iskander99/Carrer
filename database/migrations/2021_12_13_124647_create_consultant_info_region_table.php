<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultantInfoRegionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cons_info_region', function (Blueprint $table) {
            $table->id();
            //$table->integer('user_consultation_info_id');
            $table->unsignedBigInteger('user_consultation_info_id');
            $table->unsignedBigInteger('region_id');

            $table->index('user_consultation_info_id', 'users_cons_info_region_idx');
            $table->foreign('user_consultation_info_id', 'user_cons_info_region_fk')->on('users_cons_info')->references('id');

            $table->index('region_id', 'users_region_idx');
            $table->foreign('region_id', 'user_region_id_fk')->on('regions_list')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cons_info_region', function (Blueprint $table) {
            $table->dropForeign('user_cons_info_region_fk');
            $table->dropIndex('users_cons_info_region_idx');

            $table->dropForeign('user_region_id_fk');
            $table->dropIndex('users_region_idx');
        });

        Schema::dropIfExists('cons_info_region');
    }
}
