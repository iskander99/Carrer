<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersConsultantInfoTable extends Migration
{

    public function up()
    {
        Schema::create('users_cons_info', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('work_place');
            $table->integer('is_incognito')->default(0);
            $table->integer('work_mode')->default(0);
            $table->text('prof_achievements');
            $table->decimal('balance',10,2)->default(0);
            $table->integer('f_level_mod')->default(0);

            $table->index('user_id', 'users_cons_idx');
            $table->foreign('user_id', 'user_cons_fk')->on('users')->references('id');
        });
    }

    public function down()
    {
        Schema::table('users_cons_info', function (Blueprint $table) {
            $table->dropForeign('user_cons_fk');
            $table->dropIndex('users_cons_idx');
        });

        Schema::dropIfExists('users_cons_info');
    }
}
