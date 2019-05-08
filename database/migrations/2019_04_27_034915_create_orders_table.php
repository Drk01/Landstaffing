<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->text('name')->nullable();
            $table->longText('description')->nullable();
            $table->integer('user_id')->unsigned();
            $table->dateTime('startAt');
            $table->dateTime('endAt')->nullable();
            $table->string('city', 100);
            $table->string('street', 100);
            $table->integer('extN')->nullable();
            $table->longText('references')->nullable();
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
