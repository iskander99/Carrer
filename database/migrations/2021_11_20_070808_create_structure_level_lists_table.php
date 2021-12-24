<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStructureLevelListsTable extends Migration
{

    public function up()
    {
        Schema::create('structure_level_list', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('structure_level_list');
    }
}
