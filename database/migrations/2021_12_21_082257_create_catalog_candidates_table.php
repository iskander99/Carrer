<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogCandidatesTable extends Migration
{

    public function up()
    {
        Schema::create('catalog_cand', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');

            $table->timestamps();

            $table->index('user_id', 'catalog_cand_user_idx');
            $table->foreign('user_id', 'catalog_cand_user_id_fk')->on('users')->references('id');
        });
    }

    public function down()
    {
        Schema::table('catalog_cand', function (Blueprint $table) {
            $table->dropForeign('catalog_cand_user_id_fk');
            $table->dropIndex('catalog_cand_user_idx');
        });

        Schema::dropIfExists('catalog_cand');
    }
}
