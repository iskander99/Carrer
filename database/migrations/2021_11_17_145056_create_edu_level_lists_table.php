<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEduLevelListsTable extends Migration
{

    public function up()
    {
        Schema::create('edu_level_list', function (Blueprint $table) {
            $table->id();
            $table->string('title');
        });
    }

    public function down()
    {
        Schema::dropIfExists('edu_level_list');
    }
}
