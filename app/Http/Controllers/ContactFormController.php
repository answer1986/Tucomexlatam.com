<?php

namespace App\Http\Controllers;
use app\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Mail;

class ContactFormController extends Controller
{
    public function form(){

        return view('contact.form');
        }
        
        public function send(Request $request){
        
       $data = $request->validate([
        'name' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'subject' => 'required',
        'message' => 'required'
        ]);
        
        FacadesMail::to('inv.riquelme@gmail.com')->send(new ContactForm($data));
        
        return back()->with('data', $data)->with('message', ['success', 'Message sent succesfully']);
        }
}