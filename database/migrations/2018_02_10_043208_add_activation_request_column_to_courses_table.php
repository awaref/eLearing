<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddActivationRequestColumnToCoursesTable extends Migration
{

    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->boolean('activation_request')->default(0);
        });
    }

    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('activation_request');
        });
    }
}
