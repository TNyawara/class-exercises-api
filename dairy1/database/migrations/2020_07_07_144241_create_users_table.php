<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('userId');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('nationalId')->unique()->nullable();
            $table->string('empId')->unique()->nullable();
            $table->text('photo');
            $table->date('dob');
            $table->string('nssf');
            $table->string('nhif');
            $table->text('password');

            $table->unsignedBigInteger('roleId');
            $table->foreign('roleId')->references('roleId')->on('roles');

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
        Schema::dropIfExists('users');
    }
}
