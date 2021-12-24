<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersEducationTable extends Migration
{

    public function up()
    {
        Schema::create('users_edu', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('institution');
            $table->string('faculty');
            $table->string('specialization');
            //$table->integer('level');
            $table->unsignedBigInteger('level');
            $table->integer('edu_years_from');
            $table->integer('edu_years_to');

            $table->index('user_id', 'users_edu_idx');
            $table->foreign('user_id', 'user_edu_fk')->on('users')->references('id');

            $table->index('level', 'users_level_idx');
            $table->foreign('level', 'user_level_fk')->on('edu_level_list')->references('id');
        });
    }

    public function down()
    {
        Schema::table('users_edu', function (Blueprint $table) {
            $table->dropForeign('user_edu_fk');
            $table->dropIndex('users_edu_idx');

            $table->dropForeign('user_level_fk');
            $table->dropIndex('users_level_idx');
        });

        Schema::dropIfExists('users_edu');
    }
}
