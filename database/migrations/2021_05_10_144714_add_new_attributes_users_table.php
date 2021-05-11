<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewAttributesUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('firstName');
            $table->string('lastName');
            $table->string('nick');
            $table->string('DNI');
            $table->date('Bir_Date');
            $table->string('phone');
            $table->foreignId('rol_id')->constrained('roles');
            $table->foreignId('addresses_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('firstName');
            $table->dropColumn('lastName');
            $table->dropColumn('nick');
            $table->stdropColumn('DNI');
            $table->dropColumn('Bir_Date');
            $table->dropColumn('phone');
            $table->dropColumn('roles_id');
            $table->dropColumn('address_id');
        });
    }
}
