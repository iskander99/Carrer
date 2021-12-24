<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportAppealsTable extends Migration
{

    public function up()
    {
        Schema::create('support_appeals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('subject');
            $table->timestamps();

            $table->index('user_id', 'support_appeals_user_idx');
            $table->foreign('user_id', 'support_appeals_user_fk')->on('users')->references('id');
        });
    }

    public function down()
    {
        Schema::table('support_appeals', function (Blueprint $table) {
            $table->dropForeign('support_appeals_user_fk');
            $table->dropIndex('support_appeals_user_idx');
        });

        Schema::dropIfExists('support_appeals');
    }
}
