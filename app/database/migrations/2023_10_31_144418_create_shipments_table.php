<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('order_No')->nullable();
            $table->string('easyship_shipment_id')->nullable();
            $table->string('destination_name')->nullable();
            $table->string('destination_address_line_1')->nullable();
            $table->string('destination_city')->nullable();
            $table->string('destination_state')->nullable();
            $table->string('destination_postal_code')->nullable();
            $table->string('destination_phone_number')->nullable();
            $table->string('destination_email_address')->nullable();
            $table->string('platform_name')->nullable();
            $table->string('platform_order_number')->nullable();
            $table->string('currency')->nullable();
            $table->string('total_customs_value')->nullable();
            $table->string('total_actual_weight')->nullable();
            $table->string('total_dimensional_weight')->nullable();
            $table->string('total_volumetric_weight')->nullable();
            $table->string('is_insured')->nullable();
            $table->string('origin_country')->nullable();
            $table->string('destination_country')->nullable();
            $table->string('items')->nullable();
            $table->string('box')->nullable();
            $table->string('selected_courier')->nullable();
            $table->string('rates')->nullable();

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
        Schema::dropIfExists('shipments');
    }
}
