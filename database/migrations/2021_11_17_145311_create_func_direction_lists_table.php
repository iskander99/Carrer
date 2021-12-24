<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncDirectionListsTable extends Migration
{
    public function up()
    {
        Schema::create('func_direction_list', function (Blueprint $table) {
            $table->id();
            $table->string('title');
        });
    }

    public function down()
    {
        Schema::dropIfExists('func_direction_list');
    }
}
