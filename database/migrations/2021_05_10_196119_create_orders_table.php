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
            $table->string('type')->default('Comanda');
            $table->integer('ticket');
            $table->float('total', 8,2);
            $table->enum('status',['open','close'])->nullable();
            $table->string('comment')->nullable();
            $table->foreignId('drink_id')->nullable()->constrained();
            $table->foreignId('table_id')->nullable()->constrained();
            $table->foreignId('dish_id')->nullable()->constrained();
            $table->integer('ud')->nullable();
            $table->foreignId('user_id')->nullable()->constrained();
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