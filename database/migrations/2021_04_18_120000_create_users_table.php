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
            $table->increments('idUsu');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('nick');
            $table->string('DNI')->unique();
            $table->date('Bir_Date');
            $table->string('phone');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->text('profile_photo_path')->nullable();
            $table->timestamps();
            $table->unsignedInteger('idAdr');
            $table->unsignedInteger('idRol');
            $table->foreign('idAdr')->references('idAdr')->on('addresses');
            $table->foreign('idRol')->references('idRol')->on('rols');

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
