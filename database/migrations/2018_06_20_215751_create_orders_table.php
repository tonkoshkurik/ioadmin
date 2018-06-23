<?php

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
            $table->increments('id');
            $table->text('order');
            $table->text('lead')->nullable();
            $table->text('delivery')->nullable();
            $table->float('sum')->default(0);
            $table->enum('status', [ '', 'checkout', 'ordered', 'payed', 'delivered' ])->nullable();
            $table->boolean('call')->nullable();
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
