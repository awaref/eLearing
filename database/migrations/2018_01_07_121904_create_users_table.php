<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function( Blueprint $table){
            $table -> increments('id');
            $table -> string('username',255);
            $table -> string('first_name',255) -> nullable();
            $table -> string('last_name',255)  -> nullable();
            $table -> string('email', 150)     -> unique();
            $table -> string('location',255)   -> nullable();
            $table -> string('education',200)  -> nullable();
            $table -> string('password',255);
            $table -> string('gender',10);
            $table -> string('profilePicture');
            $table -> string('role',30);
            $table -> string('department',30) -> nullable();
            $table -> double('GPA') -> nullable();
            $table -> integer('level')->nullable();
            $table -> rememberToken();
            $table -> timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
