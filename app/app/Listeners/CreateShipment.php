<?php

namespace App\Listeners;

use App\CourierRates;
use App\Events\ShipmentEvent;
use App\Order;
use App\OrderItem;
use App\Services\baseUrl;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Settings;
use App\Shipment;
use App\Shipping;
use Illuminate\Queue\InteractsWithQueue;

class CreateShipment implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ShipmentEvent  $event
     * @return void
     */
    public function handle(ShipmentEvent $event)
    {

        $settings = Settings::latest()->first();
        $destination = Shipping::where(['user_id' => auth()->user()->id, 'is_default' => 1])->first();


        $data = [
            "platform_name" => $settings->site_name,
            "platform_order_number" => $event->orderNo,
            "selected_courier_id" =>  $event->courier_id,
            "destination_country_alpha2" => $destination->country,
            "destination_city" =>  $destination->city,
            "destination_postal_code" => $destination->zip_code,
            "destination_state" => $destination->state,
            "destination_name" =>  $destination->city,
            "destination_address_line_1" => $destination->address,
            "destination_address_line_2" =>  $destination->city,
            "destination_phone_number" =>  $destination->receiver_phone,
            "destination_email_address" => $destination->receiver_email,
            "items" =>  [
                [
                    "description" =>  'fashion',
                    "sku" => $event->orderNo,
                    "actual_weight" =>  0.1,
                    "height" =>  2,
                    "width" => 2,
                    "length" => 2,
                    "category" => "fashion",
                    "declared_currency" => "CAD",
                    "declared_customs_value" => 2
                ]
            ]
        ];

 

        $client = new baseUrl('https://api.easyship.com/shipment/v1/shipments', 'post', 'sand_7Kq0UOMKfMN25wnc6PWAGpLupRyI2Ee4fOauyItMJkM=', $data);
        $res = $client->client();
        dd($res);
        if($res != null) {
        $res = $res['shipment'];
        if (isset($res)) {
            Shipment::create([
                'user_id' => auth()->user()->id,
                'order_No' => $event->orderNo,
                'shipment_id' => $event->courier_id,
                'easyship_shipment_id'=>  $res['easyship_shipment_id'],
                'courier_id' => $event->courier_id,
                'courier_name' => $res['rates'][0]['courier_name'],
                'destination_name'=>$res['destination_name'],
                'destination_address_line_1' => $res['destination_address_line_1'],
                'destination_city' =>$res['destination_city'],
                'destination_state' => $res['destination_state'],
                'destination_postal_code' => $res['destination_postal_code'],
                'destination_phone_number' => $res['destination_phone_number'],
                'destination_email_address' => $res['destination_email_address'],
                'platform_name' => $res['platform_name'],
                'platform_order_number' => $res['platform_order_number'],
                'currency'  => $res['currency'],
                'total_customs_value' => $res['total_customs_value'],
                'total_actual_weight' => $res['total_actual_weight'],
                'total_dimensional_weight' => $res['total_dimensional_weight'],
                'total_volumetric_weight' => $res['total_volumetric_weight'],
                'origin_country' => null,
                'destination_country' => null,
                'items' => null,
                'box' => null,
                'selected_courier' =>json_encode($res['selected_courier']),
                'rates' => null
            ]);
        } 
    }
}
}
