<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersCandidateInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_cand_info', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('region');
            $table->string('city');
            //$table->integer('prof_field')->default(0);
            $table->integer('prof_field');
            $table->string('desired_post');
            $table->integer('desired_salary');
            //$table->integer('search_region')->default(0);
            $table->unsignedBigInteger('search_region')->nullable();
            //$table->integer('search_industry')->default(0);
            $table->unsignedBigInteger('search_industry')->nullable();
            $table->unsignedBigInteger('tag')->default(1);
            $table->integer('is_search')->default(1);

            $table->index('user_id', 'users_candidate_idx');
            $table->foreign('user_id', 'user_candidate_fk')->on('users')->references('id');

            $table->index('tag', 'users_candidate_tag_idx');
            $table->foreign('tag', 'user_candidate_tag_fk')->on('tags_cand')->references('id');

            $table->index('search_region', 'users_search_region_idx');
            $table->foreign('search_region', 'user_search_region_fk')->on('regions_list')->references('id');

            $table->index('search_industry', 'users_search_industry_idx');
            $table->foreign('search_industry', 'user_search_industry_fk')->on('industries_list')->references('id');
        });

    }

    public function down()
    {
        Schema::table('users_cand_info', function (Blueprint $table) {
            $table->dropForeign('user_candidate_fk');
            $table->dropIndex('users_candidate_idx');

            $table->dropForeign('user_candidate_tag_fk');
            $table->dropIndex('users_candidate_tag_idx');

            $table->dropForeign('user_search_region_fk');
            $table->dropIndex('users_search_region_idx');

            $table->dropForeign('user_search_industry_fk');
            $table->dropIndex('users_search_industry_idx');
        });

        Schema::dropIfExists('users_cand_info');
    }
}
