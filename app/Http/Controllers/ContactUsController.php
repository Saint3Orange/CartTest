<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function createForm(Request $request)
    {
        return view('contact');
    }

    public function ContactUsForm(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:2|max:90|',
            'city' => 'required|min:2|max:30|',
            'namecom' => 'required|min:3|max:80|',
            'position' => 'required|min:2|max:50|',
            'email' => 'required|email|min:9|max:254',
            'phone' => 'required|min:10'
        ]);
    }

    public function send(Request $request)
    {
        if ($request->method() == 'POST') {
            $textMail = "<p><b>ФИО:</b>{$request->input('name')}</p><br>";
            $textMail = "<p><b>Город:</b>{$request->input('city')}</p><br>";
            $textMail = "<p><b>Название организации:</b>{$request->input('namecom')}</p><br>";
            $textMail = "<p><b>Должность:</b>{$request->input('position')}</p><br>";
            $textMail .= "<p><b>Email:</b>{$request->input('email')}</p><br>";
            $textMail .= "<p><b>Телефон:</b>{$request->input('phone')}</p><br>";
        }
        Mail::to('mmvipstomsk@gmail.com')->send(new TestMail($textMail, $request->file('attachingFiles')));
        return view('sendru');
    }
}
