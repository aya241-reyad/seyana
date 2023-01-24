<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->integer('unit_id');
            $table->decimal('unit_cost');
            $table->integer('unit_qty');
            $table->string('cart_notes')->nullable();
            $table->string('date');
            $table->string('time');
            $table->string('order_notes')->nullable();
            $table->string('image')->nullable();
            $table->decimal('cost')->nullable();
            $table->decimal('total_cost')->nullable();
            $table->decimal('total_cost_taxes')->nullable();
            $table->string('voucher')->nullable();
            $table->enum('payment_method',['cash','visa']);
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
};