<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLocationToKamars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('kamars', function (Blueprint $table) {
        $table->decimal('latitude', 10, 8)->nullable();
        $table->decimal('longitude', 11, 8)->nullable();
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
{
    Schema::table('kamars', function (Blueprint $table) {
        $table->dropColumn('latitude');
        $table->dropColumn('longitude');
    });
}

}
