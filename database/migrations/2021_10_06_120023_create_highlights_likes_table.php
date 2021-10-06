<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHighlightsLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('highlights_likes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('highlight_id')->constrained();
            $table->foreignId('highlight_author_id')->constrained();
            $table->foreignId('like_user_id')->constrained();
            $table->string('like_user_name');
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
        Schema::dropIfExists('highlights_likes');
    }
}
