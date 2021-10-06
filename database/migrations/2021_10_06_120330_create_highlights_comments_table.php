<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHighlightsCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('highlights_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('highlight_id')->constrained('highlights', 'id');
            $table->foreignId('highlight_author_id')->constrained('highlights', 'author_id');
            $table->foreignId('comment_user_id')->constrained('users', 'id');
            $table->tinyText('comment_message');
            $table->integer('comment_likes_amount')->default(0);
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
        Schema::dropIfExists('highlights_comments');
    }
}
