<?php 
namespace App\Traits;

trait password {
    public function generatePassword($request){
        $pp = substr($request,0,5);
        $nm = rand(1111,9999).rand(1111,9999);
        $password = $pp.$nm;
        return $password;
    }
}