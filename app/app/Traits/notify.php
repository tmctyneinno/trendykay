<?php 

namespace App\Traits;
use App\User;
use App\Notification;
use App\AdminNotify;

trait notify {

    public function sendNotify($title, $message){
        $getUser = User::where('id', auth()->user()->id)->first();
        $notify = new Notification;
        $notify->user_id = $getUser->id;
        $notify->title = $title;
        $notify->message = 'Dear '.$getUser->name. ', <br>'.$message;
        $notify->save();
        $admin = new AdminNotify;
        $admin->message = $title;
        $admin->save();

}

}