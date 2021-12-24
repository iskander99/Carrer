<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogConstultantQuestionsTable extends Migration
{

    public function up()
    {
        Schema::create('catalog_cons_quest', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('catalog_id');
            $table->text('exp');

            $table->index('catalog_id', 'catalog_cons_catalog_idx');
            $table->foreign('catalog_id', 'catalog_cons_catalog_fk')->on('catalog_cons')->references('id');
        });
    }

    public function down()
    {
        Schema::table('catalog_cons_quest', function (Blueprint $table) {
            $table->dropForeign('catalog_cons_catalog_fk');
            $table->dropIndex('catalog_cons_catalog_idx');
        });

        Schema::dropIfExists('catalog_cons_quest');
    }
}
