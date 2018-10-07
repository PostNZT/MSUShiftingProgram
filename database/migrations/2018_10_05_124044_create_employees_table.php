<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->uuid('uuid')->unique();
            $table->string('gender')->nullable();
            $table->string('picture')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('employee_id')->nullable();
            $table->boolean('is_authorize')->default(false);
            $table->unique(['first_name', 'middle_name', 'last_name'], 'employee_name');
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
        Schema::dropIfExists('employees');
    }
}