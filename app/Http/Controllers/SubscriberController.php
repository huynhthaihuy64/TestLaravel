<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendMail;
use Illuminate\Support\Facades\Session;

class SubscriberController extends Controller
{
    public function sendEmail($mail)
    {


        Mail::to($mail)->send(new sendMail);

        Session::flash('success', 'Update Success');
        return redirect()->back();
    }
}
