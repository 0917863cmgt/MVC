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
            $table->foreignId('user_id')->constrained('users', 'id');
            $table->foreignId('category_id')->constrained('categories', 'id');
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('image');
            $table->string('banner');
            $table->mediumText('summary');
            $table->longText('body');
            $table->boolean('highlighted')->default(false);
            $table->boolean('published')->default(false);
            $table->dateTime('publish_date');
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
