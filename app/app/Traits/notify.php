<?php 

namespace App\Traits;
use App\User;
use App\Notification;
use App\AdminNotify;

trait notify {

    public function sendNotify($title, $message){
        $admin = new AdminNotify;
        $admin->message = $title;
        $admin->save();
}

}