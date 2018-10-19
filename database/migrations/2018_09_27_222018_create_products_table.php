<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) 
        {
            $table->increments('id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->string('name')->unique();
            $table->string('image');
            $table->float('unit_price', 10, 2)->unsigned();
            $table->float('promotion_price', 10, 2)->nullable()->unsigned();
            $table->integer('quantity')->unsigned();
            $table->text('short_description');
            $table->text('full_description');
            $table->tinyInteger('hot');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
            'category_id',
        ]);
        Schema::dropIfExists('products');
    }
}
