<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            // $table->bigIncrements('user_id');
            
            $table->unsignedBigInteger('department_id');
            // $table->string('fullname');
            $table->string('address');
            $table->string('employed');
            $table->string('dob');
            $table->string('salary');
            $table->string('phone_number');
            $table->string('specialization');
            $table->string('city');
            // $table->string('password');
            // $table->string('email');
            $table->string('gender');
            // $table->string('image');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');

        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
