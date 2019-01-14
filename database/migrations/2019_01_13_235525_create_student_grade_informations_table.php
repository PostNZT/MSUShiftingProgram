<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentGradeInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_grade_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id');
            $table->string('semester');
            $table->string('school_year');
            $table->string('subject_code');
            $table->string('section');
            $table->string('description');
            $table->string('grade');
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
        Schema::dropIfExists('student_grade_informations');
    }
}
