<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id')->constrained('users', 'id');
            $table->string('slug')->unique();
            $table->string('category');
            $table->string('title');
            $table->string('article_image');
            $table->string('article_banner');
            $table->mediumText('article_summary');
            $table->longText('article_body');
            $table->binary('published');
            $table->binary('highlighted');
            $table->dateTime('article_publish_date');
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
        Schema::dropIfExists('articles');
    }
}
