<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendMail;

class SubscriberController extends Controller
{
    public function sendEmail($mail)
    {


        Mail::to($mail)->send(new sendMail);

        return "<p> Thành công! Email của bạn đã được gửi</p>";
    }
}
