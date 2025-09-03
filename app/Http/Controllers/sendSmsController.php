<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class sendSmsController extends Controller
{
    // public function sendTest()
    // {
    //     $sid    = "AC949748be2909cc82716293aa651af86d";
    //     $token  = "4121493c45e66551bda5daaeb78385de";
    //     $from   = "+19148098609";

    //     $twilio = new Client($sid, $token);

    //     //     $message = $twilio->messages("SM7c97677692e10937a4efe4414daad59e")
    //     //                   ->fetch();

    //     // return $message; 22

    //     $message = $twilio->messages->create(
    //         "+19148098684",
    //         [
    //             "from" => $from,
    //             "body" => 1415
    //         ]
    //     );

    //     return response()->json($message->toArray());
    // }
}
