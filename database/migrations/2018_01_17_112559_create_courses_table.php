<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{

    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('title', 200);
            $table->string('department', 200);
            $table->string('start_date', 50);
            $table->string('end_date', 50);
            $table->string('course_language', 50);
            $table->string('course_specialization', 100);
            $table->string('course_image', 200);
            $table->string('course_icon', 100);
            $table->text('description', 500);
            $table->text('how_to_pass', 500);
            $table->integer('commitment');
            $table->integer('instructor_id');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
