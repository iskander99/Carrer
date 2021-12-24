<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogConsultantsTable extends Migration
{

    public function up()
    {
        Schema::create('catalog_cons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');

            $table->timestamps();

            $table->index('user_id', 'catalog_cons_user_idx');
            $table->foreign('user_id', 'catalog_cons_user_id_fk')->on('users')->references('id');
        });
    }


    public function down()
    {
        Schema::table('catalog_cons', function (Blueprint $table) {
            $table->dropForeign('catalog_cons_user_id_fk');
            $table->dropIndex('catalog_cons_user_idx');
        });

        Schema::dropIfExists('catalog_cons');
    }
}
