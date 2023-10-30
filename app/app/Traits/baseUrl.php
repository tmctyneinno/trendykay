<?php 
namespace App\Traits;

use GuzzleHttp\Client;

trait baseUrl {

    public $url;
    public $method;
    public $jsonBody;
    public $apiKey;

    public function __construct($url, $method, $apiKey,  $jsonBody = [])
    {
        $this->url = $url;
        $this->method = $method;
        $this->jsonBody = $jsonBody;
        $this->apiKey = $apiKey;
    }

    public function Client(){
    $client = new Client();
    $res = $client->request($this->method, $this->url, [
        'headers' => [
            'Authorization' => 'Bearer '.$this->apiKey,
            'Content-Type' => 'application/json',
        ],
        'json' => $this->jsonBody
    ]);
  
    return $res;
    }


}