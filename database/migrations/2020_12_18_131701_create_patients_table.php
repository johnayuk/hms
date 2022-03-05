<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table){
            $table->id();
            $table->string('fullname');
            $table->string('gender');
            $table->string('dob');
            $table->string('address1');
            $table->string('city');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('image');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreignId('doctor_id')->constrained('doctors')->OnDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}