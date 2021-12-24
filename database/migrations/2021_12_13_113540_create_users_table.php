<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('email');
            $table->date('birth_day');
            $table->string('citizenship');
            $table->string('password');
            $table->string('img')->nullable();
            $table->unsignedBigInteger('role');

            $table->timestamps();
            $table->softDeletes();

            $table->index('role', 'user_role_idx');
            $table->foreign('role', 'user_role_fk')->on('roles')->references('id');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('user_role_fk');
            $table->dropIndex('user_role_idx');
        });

        Schema::dropIfExists('users');
    }
}
