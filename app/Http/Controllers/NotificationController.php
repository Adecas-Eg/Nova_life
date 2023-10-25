<?php

namespace App\Http\Controllers;

use App\Models\Casa;
use Illuminate\Http\Request;

class NotificationController extends Controller
{

    public function all_notifications(){
        auth()->user()->unreadNotifications->markAsRead();
        return redirect()->back();
    }
    public function one_notifications($notification_id,$casa_id){
        auth()->user()->unreadNotifications->where('id',$notification_id)->markAsRead();
        $casa =  Casa::find($casa_id);
        return redirect()->route('casa.show',compact('casa'));

    }


}
