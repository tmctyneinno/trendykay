<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_collections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('order_No')->nullable();
            $table->string('shipment_id')->nullable();
            $table->string('courier_id')->nullable();
            $table->string('courier_name')->nullable();
            $table->string('easyship_shipment_ids')->nullable();
            $table->string('easyship_pickup_id')->nullable();
            $table->string('preferred_min_time')->nullable();
            $table->string('')->nullable();
            $table->string('')->nullable();
            $table->string('')->nullable();
            $table->string('')->nullable();
            $table->string('')->nullable();
            $table->string('')->nullable();
            $table->string('')->nullable();
            $table->string('')->nullable();
            $table->string('')->nullable();
            $table->string('')->nullable();
            $table->string('')->nullable();
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
        Schema::dropIfExists('shipping_collections');
    }
}
