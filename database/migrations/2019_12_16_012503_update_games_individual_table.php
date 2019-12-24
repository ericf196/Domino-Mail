<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateGamesIndividualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('games_individual', function($table)
        {
            $table->string('pro_g')->nullable();
            $table->string('z')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('games_individual', function($table) {
            $table->string('pro_g');
            $table->string('z');
        });
    }
}
