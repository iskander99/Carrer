<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_exp', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('organization');
            $table->string('post');
            $table->string('duties');
            //$table->integer('func_direction')->default(0);
            $table->unsignedBigInteger('func_direction')->nullable();
            $table->integer('exp_mode')->default(0);
            $table->integer('exp_years_from');
            $table->integer('exp_years_to');
            $table->integer('now');

            $table->index('user_id', 'users_exp_idx');
            $table->foreign('user_id', 'user_exp_fk')->on('users')->references('id');

            $table->index('func_direction', 'users_func_direction_idx');
            $table->foreign('func_direction', 'user_func_direction_fk')->on('func_direction_list')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users_exp', function (Blueprint $table) {
            $table->dropForeign('user_exp_fk');
            $table->dropIndex('users_exp_idx');

            $table->dropForeign('user_func_direction_fk');
            $table->dropIndex('users_func_direction_idx');
        });

        Schema::dropIfExists('users_exp');
    }
}
