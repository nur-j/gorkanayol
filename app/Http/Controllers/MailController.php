<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\OrderMail;

class MailController extends Controller
{
    
    public function index()
    {
        $mail_data = [
            'title' => 'mail title',
            'body' => 'mail body'
        ];

        Mail::to('jumayev.nur@gmail.com')->send(new OrderMail($mail_data));
        dd('Mail was sent');
    }

}
