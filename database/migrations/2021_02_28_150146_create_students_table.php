<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->string('first_name', 250)->nullable()->unique();
            $table->string('last_name', 250)->nullable()->unique();
            $table->string('specialty', 250)->nullable()->unique();
            $table->Integer('age')->default(0);
            $table->Integer('group_number')->default(0);
            $table->Integer('course_number')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
