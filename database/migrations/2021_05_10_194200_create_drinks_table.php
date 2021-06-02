<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drinks', function (Blueprint $table) {
            $table->id();
            $table->integer('amount');
            $table->string('image');
            $table->string('name');
            $table->double('price');
            $table->text('description')->nullable();
            $table->boolean('default_img')->default(false)->nullable();
            $table->string('type')->default('Bebida');
            $table->foreignId('categories_id')->constrained('drink_categories');
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
        Schema::dropIfExists('drinks');
    }
}