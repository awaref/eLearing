<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInstructorIdAndTaIdToCoursesTable extends Migration
{

    public function up()
    {
        Schema::table('courses', function(Blueprint $table){
            $table->integer('instructor_id');
            $table->integer('ta_id');
        });
    }


    public function down()
    {
        Schema::table('courses', function(Blueprint $table){
            $table->dropColumn('instructor_id');
            $table->dropColumn('ta_id');
        });
    }
}
