<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->integer('age');
            $table->string('fName');
            $table->string('lName');
            $table->string('tel');
            $table->string('country');
            $table->string('idNo');
            $table->string('licNo');
            $table->string('address');
            $table->string('city');
            $table->string('poscode');
            $table->string('state');
            $table->ipAddress('visitor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropColumn('age');
            $table->dropColumn('fName');
            $table->dropColumn('lName');
            $table->dropColumn('tel');
            $table->dropColumn('country');
            $table->dropColumn('idNo');
            $table->dropColumn('licNo');
            $table->dropColumn('address');
            $table->dropColumn('city');
            $table->dropColumn('poscode');
            $table->dropColumn('state');
            $table->ipAddress('visitor');
        });
    }
};
