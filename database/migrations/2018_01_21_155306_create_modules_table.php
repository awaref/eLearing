<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulesTable extends Migration
{

    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('introduction');
            $table->integer('course_id');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('modules');
    }
}
