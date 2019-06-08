<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\EventMessage;
class MessageController extends Controller
{
    
    public function sendMessage(){
        $message = array('íd'=>1,'message'=>'sendMessage!!');
        event(New EventMessage($message));
        return 'Send message!';
    }
}
