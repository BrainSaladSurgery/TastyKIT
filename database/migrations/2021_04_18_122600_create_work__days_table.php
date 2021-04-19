<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work__days', function (Blueprint $table) {
            $table->increments('idWor');
            $table->time('entry_Time');
            $table->time('departure_Time');
            $table->date('date');
            $table->string('day_week');
            $table->unsignedInteger('idUsu');
            $table->foreign('idUsu')->references('idUsu')->on('users');
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
        Schema::dropIfExists('work__days');
    }
}
