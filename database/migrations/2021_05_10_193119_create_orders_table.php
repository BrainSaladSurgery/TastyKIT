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
            $table->id();
            $table->boolean('type');
            $table->enum('status',['in_process','omw','finish']);
            $table->string('comment');
            $table->time('hour')->nullable();
            $table->timestamp('hour_Entry');
            $table->foreignId('table_id')->constrained();
            $table->foreignId('client_id')->constrained();
            $table->foreignId('invoice_id')->constrained();
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
