<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogCandidateQuestionsTable extends Migration
{

    public function up()
    {
        Schema::create('catalog_cand_quest', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('catalog_id');
            $table->string('desired_post');
            $table->integer('desired_salary');
            $table->string('work_place');
            $table->text('search_job_goal');

            $table->index('catalog_id', 'catalog_cand_catalog_idx');
            $table->foreign('catalog_id', 'catalog_cand_catalog_fk')->on('catalog_cand')->references('id');
        });
    }

    public function down()
    {
        Schema::table('catalog_cand_quest', function (Blueprint $table) {
            $table->dropForeign('catalog_cand_catalog_fk');
            $table->dropIndex('catalog_cand_catalog_idx');
        });

        Schema::dropIfExists('catalog_cand_quest');
    }
}
