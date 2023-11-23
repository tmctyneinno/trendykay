<?php 
namespace App\Traits;

use App\Services\baseUrl;

trait GetRates {

    public function SendRequest($origin_postal_code, $destination_country_alpha2, $destination_postal_code, $taxes_duties_paid_by, $is_insured, 
    $actual_weight, $height, $width, $length, $category, $declared_currency, $declared_customs_value){
    
        $body =  [
            "origin_postal_code" => $origin_postal_code,
            "destination_country_alpha2"  =>  $destination_country_alpha2,
            "destination_postal_code"  =>   $destination_postal_code,
            "taxes_duties_paid_by"  => $taxes_duties_paid_by,
            "is_insured"  =>  $is_insured,
            "items"  =>  [
              [
                "actual_weight"  =>  $actual_weight,
                "height"  =>  $height,
                "width"  =>  $width,
                "length"  =>  $length,
                "category"  =>  $category,
                "declared_currency"  => $declared_currency,
                "declared_customs_value"  =>  $declared_customs_value
              ]
            ]
              ];

      $client =  new baseUrl("https://api.easyship.com/rate/v1/rates", "post", "sand_7Kq0UOMKfMN25wnc6PWAGpLupRyI2Ee4fOauyItMJkM=", $body);
     $req = $client->client();
    return $req;
    }
}