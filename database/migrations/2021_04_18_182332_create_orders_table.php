<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('idOrd');
            $table->boolean('type');
            $table->enum('status',['in_process','omw','finish']);
            $table->string('comment');
            $table->time('hour')->nullable();
            $table->timestamp('hour_Entry');
            $table->unsignedInteger('idTab');
            $table->unsignedInteger('idCli');
            $table->unsignedInteger('idFac');
            $table->foreign('idTab')->references('idTab')->on('tables');
            $table->foreign('idCli')->references('idCli')->on('clients');
            $table->foreign('idFac')->references('idFac')->on('factures');
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
        Schema::dropIfExists('orders');
    }
}
