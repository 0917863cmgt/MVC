<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHighlightsCommentLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('highlights_comment_likes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('highlight_id')->constrained();
            $table->foreignId('highlight_author_id')->constrained();
            $table->foreignId('comment_id')->constrained();
            $table->foreignId('like_user_id')->constrained();
            $table->string('like_user_name')->constrained();
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
        Schema::dropIfExists('highlights_comment_likes');
    }
}
