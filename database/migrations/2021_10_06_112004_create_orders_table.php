<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_number');
            $table->foreignId('user_id')->constrained('users', 'id');
            $table->string('costumer_name');
            $table->string('to_street');
            $table->string('to_house');
            $table->string('to_city');
            $table->string('to_zip');
            $table->string('to_country');
            $table->dateTime('ship_date');
            $table->foreignIdFor('product_id')->constrained('products', 'id');
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
        Schema::dropIfExists('orders');
    }
}
