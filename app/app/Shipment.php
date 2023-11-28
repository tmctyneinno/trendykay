<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    //

    protected $fillable = [
        'user_id', 'order_No', 'easyship_shipment_id', 'destination_name', 'destination_address_line_1', 'destination_city', 'destination_state', 'destination_postal_code', 'destination_phone_number', 'destination_email_address', 'platform_name', 'platform_order_number', 'currency', 'total_customs_value', 'total_actual_weight', 'total_dimensional_weight', 'total_volumetric_weight', 'is_insured', 'origin_country', 'destination_country', 'items', 'box', 'selected_courier', 'rates'
    ];
}
