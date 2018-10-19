<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotesTable extends Migration 
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('votes', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->tinyInteger('rating')->default(1);
            $table->string('content');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropForeign([
            'user_id',
            'product_id',
        ]);
        Schema::dropIfExists('votes');
    }
}
