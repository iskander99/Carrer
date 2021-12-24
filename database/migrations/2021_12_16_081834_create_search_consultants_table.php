<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSearchConsultantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('search_cons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('tag');
            //$table->integer('search_region')->default(0);
            //$table->integer('search_industry')->default(0);
            $table->unsignedBigInteger('search_region')->nullable();
            $table->unsignedBigInteger('search_industry')->nullable();
            $table->unsignedBigInteger('cons_from_top_id')->nullable();
            $table->decimal('cons_from_top_price', 10,2)->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->index('user_id', 'search_cons_idx');
            $table->foreign('user_id', 'search_cons_fk')->on('users')->references('id');

            $table->index('tag', 'search_cons_tag_idx');
            $table->foreign('tag', 'search_cons_tag_fk')->on('tags_cand')->references('id');

            $table->index('cons_from_top_id', 'search_cons_cand_from_idx');
            $table->foreign('cons_from_top_id', 'search_cons_cand_from_fk')->on('users')->references('id');

            $table->index('search_region', 'search_region_idx');
            $table->foreign('search_region', 'search_region_fk')->on('regions_list')->references('id');

            $table->index('search_industry', 'search_industry_idx');
            $table->foreign('search_industry', 'search_industry_fk')->on('industries_list')->references('id');
        });
    }

    public function down()
    {
        Schema::table('search_cons', function (Blueprint $table) {
            $table->dropForeign('search_cons_fk');
            $table->dropIndex('search_cons_idx');

            $table->dropForeign('search_cons_tag_fk');
            $table->dropIndex('search_cons_tag_idx');

            $table->dropForeign('search_cons_cand_from_fk');
            $table->dropIndex('search_cons_cand_from_idx');

            $table->dropForeign('search_region_fk');
            $table->dropIndex('search_region_idx');

            $table->dropForeign('search_industry_fk');
            $table->dropIndex('search_industry_idx');
        });

        Schema::dropIfExists('search_cons');
    }
}
