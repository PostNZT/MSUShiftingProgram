<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->integer('student_id');
            $table->uuid('uuid')->unique();
            $table->string('gender');
            $table->integer('age');
            $table->string('civil_status');
            $table->integer('old_college_id');
            $table->integer('old_course_id');
            $table->integer('new_college_id');
            $table->integer('new_course_id');
            $table->integer('year_level');
            $table->string('contact_no');
            $table->string('campus_address');
            $table->string('guardian_name');
            $table->string('guardian_address');
            $table->string('guardian_number');
            $table->string('guardian_relationship');
            $table->integer('number_times_shifted');
            $table->unique(['first_name', 'middle_name', 'last_name'], 'student_name');
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
