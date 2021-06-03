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
            $table->enum('status',['open','close']);
            $table->string('comment');
            //$table->time('hour')->nullable();
            $table->timestamp('hour_Entry');
            $table->foreignId('product_id')->constrained('products')->nullable();
            $table->foreignId('drink_id')->constrained('drinks')->nullable();
            $table->foreignId('table_id')->constrained('tables')->nullable();
            $table->foreignId('user_id')->constrained('User');
            //$table->foreignId('invoice_id')->constrained();
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