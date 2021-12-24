<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopVipProfileFilesTable extends Migration
{

    public function up()
    {
        Schema::create('top_vip_cons_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('top_vip_profile_id');
            $table->string('file');

            $table->index('top_vip_profile_id', 'vip_profile_id_files_idx');
            $table->foreign('top_vip_profile_id', 'vip_profile_id_files_fk')->on('top_vip_cons')->references('id');
        });
    }


    public function down()
    {
        Schema::table('top_vip_cons_files', function (Blueprint $table) {
            $table->dropForeign('vip_profile_id_files_fk');
            $table->dropIndex('vip_profile_id_files_idx');
        });

        Schema::dropIfExists('top_vip_cons_files');
    }
}
