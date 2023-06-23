<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Registration;

class MailController extends Controller
{
    function send_mail($request) {
        Mail::to($request->email)->send(new Registration($request));
    }
}
