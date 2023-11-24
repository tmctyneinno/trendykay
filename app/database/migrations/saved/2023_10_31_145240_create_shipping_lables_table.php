<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingLablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_lables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('order_No')->nullable();
            $table->string('shipment_id')->nullable();
            $table->string('easyship_shipment_id')->nullable();
            $table->string('label_state')->nullable();
            $table->string('status')->nullable();
            $table->string('label_url')->nullable();
            $table->string('tracking_number')->nullable();
            $table->string('tracking_page_url')->nullable();
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
        Schema::dropIfExists('shipping_lables');
    }
}
