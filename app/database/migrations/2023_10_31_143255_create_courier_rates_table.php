<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourierRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courier_rates', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('order_no')->nullable();
            $table->string('courier_id')->nullable();
            $table->string('courier_name')->nullable();
            $table->string('min_delivery_time')->nullable();
            $table->string('max_delivery_time')->nullable();
            $table->string('value_for_money_rank')->nullable();
            $table->string('delivery_time_rank')->nullable();
            $table->string('shipment_charge')->nullable();
            $table->string('shipment_charge_total')->nullable();
            $table->string('effective_incoterms')->nullable();
            $table->string('courier_does_pickup')->nullable();
            $table->string('courier_dropoff_url')->nullable();
            $table->string('tracking_rating')->nullable();
            $table->string('currency')->nullable();
            $table->string('payment_recipient')->nullable();
            $table->string('courier_remarks')->nullable();
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
        Schema::dropIfExists('courier_rates');
    }
}
