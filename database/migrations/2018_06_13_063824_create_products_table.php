<?php

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
            $table->integer('category_id');
            $table->text('photos');
            $table->float('base_price');
            $table->float('discount_price')->nullable();
            $table->string('sizes')->nullable();
            $table->text('description')->nullable();
            $table->text('extras')->nullable();
            $table->string('slug');
            $table->enum('label', [ 'top', 'new', 'discount' ])->nullable();
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
