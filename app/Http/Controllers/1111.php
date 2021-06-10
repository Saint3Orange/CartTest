<?php
/*
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
            'city' => 'required|regex:(/[^А-Я\-\ \]/g, \'\')|min:2|max:30|',
            'namecom' => 'required|regex:(/[^А-Я\A-Z\-\ \"\]/g,)|min:3|max:80|',
            'position' => 'required|regex:(/[^А-Я\-\ \]/g, \'\')|min:2|max:50|',
            'email' => 'required|email|min:9|max:254',
            'phone' => 'required|regex:/^([0-9\+\]*)$/|min:10'
        ]);
    }

    public function send(Request $request)
    {
        if ($request->method() == 'POST') {
            $textMail = "<p><b>ФИО:</b>{$request->input('name')}</p><br>";
            $textMail = "<p><b>Город:</b>{$request->input('city')}</p><br>";
            $textMail = "<p><b>Название организации:</b>{$request->input('namecom')}</p><br>";
            $textMail = "<p><b>Должность:</b>{$request->input('position')}</p><br>";
            $textMail .= "<p><b>Телефон:</b>{$request->input('phone')}</p><br>";
            $textMail .= "<p><b>Email:</b>{$request->input('email')}</p><br>";
        }
        Mail::to('mmvipstomsk@gmail.com')->send(new TestMail($textMail, $request->file('attachingFiles')));
        return view('sendru');
    }
}*/


/*Mail::send('mail', array(
           'name' => $request->get('name'),
           'city' => $request->get('city'),
           'namecom' => $request->get('namecom'),
           'position' => $request->get('position'),
           'email' => $request->get('email'),
           'phone' => $request->get('phone'),
       ), function($message) use ($request){
           $message->from($request->email);
           $message->to('digambersingh126@gmail.com', 'Admin')->subject($request->get('subject'));
       });*/
