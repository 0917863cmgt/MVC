<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor('user_id')->constrained('users', 'id');
            $table->string('user_full_name');
            $table->tinyInteger('rank')->default(0);
            $table->smallInteger('rank_points')->default(0);
            $table->smallInteger('matches_played')->default(0);
            $table->smallInteger('matches_won')->default(0);
            $table->smallInteger('matches_draw')->default(0);
            $table->smallInteger('matches_lost')->default(0);
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
        Schema::dropIfExists('statistics');
    }
}
