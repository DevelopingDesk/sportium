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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('code')->nullable();
            $table->integer('price')->nullable();
            $table->string('description');
            $table->string('image');
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->integer('featured')->nullable();
         
         $table->integer('subcategory_id')->unsigned();
           
            $table->foreign('subcategory_id')->references('id')->on('sub_categories')
                ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
