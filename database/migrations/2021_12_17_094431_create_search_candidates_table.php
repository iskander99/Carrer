<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSearchCandidatesTable extends Migration
{
    public function up()
    {
        Schema::create('search_cand', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('tag');

            $table->unsignedBigInteger('func_direction')->nullable();
            $table->unsignedBigInteger('search_region')->nullable();
            $table->unsignedBigInteger('search_industry')->nullable();

//            $table->integer('func_direction')->default(0);
//            $table->integer('search_region')->default(0);
//            $table->integer('search_industry')->default(0);

            //$table->integer('is_canceled')->default(0);
            $table->timestamps();

            $table->index('user_id', 'search_cand_idx');
            $table->foreign('user_id', 'search_cand_user_id_fk')->on('users')->references('id');

            $table->index('tag', 'search_cand_tag_idx');
            $table->foreign('tag', 'search_cand_tag_fk')->on('tags_cons')->references('id');

            $table->index('func_direction', 'func_direction_id_idx');
            $table->foreign('func_direction', 'func_direction_id_fk')->on('func_direction_list')->references('id');

            $table->index('search_region', 'search_region_id_idx');
            $table->foreign('search_region', 'search_region_id_fk')->on('regions_list')->references('id');

            $table->index('search_industry', 'search_industry_id_idx');
            $table->foreign('search_industry', 'search_industry_id_fk')->on('industries_list')->references('id');
        });
    }

    public function down()
    {
        Schema::table('search_cand', function (Blueprint $table) {
            $table->dropForeign('search_cand_user_id_fk');
            $table->dropIndex('search_cand_idx');

            $table->dropForeign('search_cand_tag_fk');
            $table->dropIndex('search_cand_tag_idx');

            $table->dropForeign('func_direction_id_fk');
            $table->dropIndex('func_direction_id_idx');

            $table->dropForeign('search_region_id_fk');
            $table->dropIndex('search_region_id_idx');

            $table->dropForeign('search_industry_id_fk');
            $table->dropIndex('search_industry_id_idx');
        });

        Schema::dropIfExists('search_cand');
    }
}
