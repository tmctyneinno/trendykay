<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourierRates extends Model
{
    //

    protected $fillable = [
        'courier_id', 'courier_name','full_description','total_charge', 'user_id', 'order_no', 'min_delivery_time', 'max_delivery_time', 'value_for_money_rank', 'delivery_time_rank', 'shipment_charge', 'shipment_charge_total', 'effective_incoterms', 'courier_does_pickup', 'courier_dropoff_url', 'tracking_rating', 'currency', 'payment_recipient', 'courier_remarks'
    ];

    
}
