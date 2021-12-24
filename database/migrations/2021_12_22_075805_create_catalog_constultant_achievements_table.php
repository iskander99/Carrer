<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogConstultantAchievementsTable extends Migration
{

    public function up()
    {
        Schema::create('catalog_cons_achievs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('catalog_cons_quest_id');
            $table->string('title');

            $table->index('catalog_cons_quest_id', 'catalog_cons_quest_achievs_idx');
            $table->foreign('catalog_cons_quest_id', 'catalog_cons_quest_achievs_id_fk')->on('catalog_cons_quest')->references('id');
        });
    }


    public function down()
    {
        Schema::table('catalog_cons_achievs', function (Blueprint $table) {
            $table->dropForeign('catalog_cons_quest_achievs_id_fk');
            $table->dropIndex('catalog_cons_quest_achievs_idx');
        });


        Schema::dropIfExists('catalog_cons_achievs');
    }
}
