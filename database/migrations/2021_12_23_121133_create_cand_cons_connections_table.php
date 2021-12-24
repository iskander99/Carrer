<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandConsConnectionsTable extends Migration
{
    public function up()
    {
        Schema::create('cand_cons_connection', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cand_id');
            $table->unsignedBigInteger('cons_id');
            $table->dateTime('meet_time');
            $table->integer('status')->default(0);

            $table->timestamps();

            $table->index('cand_id', 'connection_cand_id_idx');
            $table->foreign('cand_id', 'connection_cand_id_fk')->on('users')->references('id');

            $table->index('cons_id', 'connection_cons_id_idx');
            $table->foreign('cons_id', 'connection_cons_id_fk')->on('users')->references('id');
        });
    }

    public function down()
    {
        Schema::table('cand_cons_connection', function (Blueprint $table) {
            $table->dropForeign('connection_cand_id_fk');
            $table->dropIndex('connection_cand_id_idx');

            $table->dropForeign('connection_cons_id_fk');
            $table->dropIndex('connection_cons_id_idx');
        });

        Schema::dropIfExists('cand_cons_connection');
    }
}
