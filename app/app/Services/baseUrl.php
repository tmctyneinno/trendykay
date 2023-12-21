<?php 
namespace App\Services;

use GuzzleHttp\Client;

class baseUrl {

    public $url;
    public $method;
    public $jsonBody;
    public $apiKey;


    public function __construct($url, $method, $apiKey,  $jsonBody)
    {
        $this->url = $url;
        $this->method = $method;
        $this->jsonBody = $jsonBody;
        $this->apiKey = $apiKey;
    }

    public function Client(){
    try {
        $client = new Client();
    $res = $client->request($this->method, $this->url, [
        'headers' => [
            'authorization' => 'Bearer '.$this->apiKey,
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => $this->jsonBody
    ]);
  
    $resp = json_decode($res->getBody(),true);
    return $resp;
}catch(\Exception $e){
  $ss = json_encode($e->getMessage());
    dd($ss['response']);
}
    
}


}