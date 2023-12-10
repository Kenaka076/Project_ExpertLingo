<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email')->unique();
            $table->string('phoneNumber');
            $table->string('password');
            $table->timestamps();
        });
        DB::statement('ALTER TABLE students AUTO_INCREMENT = 100');

    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
