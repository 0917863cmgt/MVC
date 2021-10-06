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
            $table->foreignId('highlight_id')->constrained('highlights', 'id');
            $table->foreignId('highlight_author_id')->constrained('highlights', 'author_id');
            $table->foreignId('comment_id')->constrained('highlights_comments', 'id');
            $table->foreignId('like_user_id')->constrained('users', 'id');
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
