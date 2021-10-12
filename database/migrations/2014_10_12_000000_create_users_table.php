<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('role')->default(1);
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('prefix', 20)->nullable();
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('gender', 10);
            $table->date('birthdate');
            $table->string('street_name', 50);
            $table->string('house_number_and_extension', 5);
            $table->string('postal_code', 8);
            $table->string('country',56);
            $table->string('phone_number', 10);
            $table->string('profile_image')->nullable();
            $table->string('background_image')->nullable();
            $table->string('bio')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('follows');
        Schema::dropIfExists('articles');
        Schema::dropIfExists('users');
    }
}
