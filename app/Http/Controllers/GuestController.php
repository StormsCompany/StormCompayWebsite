<?php

namespace App\Http\Controllers;

use App\Mail\GuestMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GuestController extends BaseController
{
    //

    public function index(Request $request)
    {
        # code...
        $result = $this->sendGuestEmail($request->name, $request->email, $request->message, $request->receiver);

        if ($result) {
            return $this->sendResponse("success", $result);
        } else {
            return $this->sendError('error', "Could not send this mesage");
        }

    }

    public function sendGuestEmail($name, $email, $message, $receiver = null)
    {
        # code...

        if (!$receiver) {
            $receiver = "stormcompanies@gmail.com";
        }

        try {
            $guestMail = new GuestMail($name, $email, $message);
            Mail::to($receiver)->send($guestMail);
            return "The message has been sent";
        } catch (Exception $e) {
            $e->getMessage();
            info($e->getMessage());
            return false;
        }
    }
}
