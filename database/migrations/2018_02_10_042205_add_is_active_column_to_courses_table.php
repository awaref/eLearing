<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsActiveColumnToCoursesTable extends Migration
{

    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->boolean('is_active')->default(0);
        });
    }

    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('is_active');
        });
    }
}
