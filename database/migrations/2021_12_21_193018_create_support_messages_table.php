<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportMessagesTable extends Migration
{

    public function up()
    {
        Schema::create('support_messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('appeal_id');
            $table->unsignedBigInteger('user_id');
            $table->text('message');
            $table->timestamps();

            $table->index('appeal_id', 'support_messages_appeal_idx');
            $table->foreign('appeal_id', 'support_messages_appeal_id_fk')->on('support_appeals')->references('id');

            $table->index('user_id', 'support_messages_user_idx');
            $table->foreign('user_id', 'support_messages_user_fk')->on('users')->references('id');
        });
    }

    public function down()
    {
        Schema::table('support_messages', function (Blueprint $table) {
            $table->dropForeign('support_messages_appeal_id_fk');
            $table->dropIndex('support_messages_appeal_idx');

            $table->dropForeign('support_messages_user_fk');
            $table->dropIndex('support_messages_user_idx');
        });

        Schema::dropIfExists('support_messages');
    }
}
