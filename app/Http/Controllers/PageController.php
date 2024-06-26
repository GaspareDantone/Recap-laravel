<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendRequest;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function homepage() {
        return view('homepage');
    }

   public function contact() {
        return view('contact');
    }

    public function send(SendRequest $request){
        $data = [
            "email" => $request->email,

            "text" => $request->text,
        ];


        Mail::to('dantogas@gmail.com')->send(new SendMail($data));

    }
}
