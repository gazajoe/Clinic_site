<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contactpage(){

        return view('front.contact.page');
    }
    public function storecontact(Request $request){

        $request->validate([

            'name'=>'required',
            'email'=>'required',

        ]);

        Contact::Insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message,

        ]);


        $notification =array(
            'message'=>'message sent successfully',
            'alert-type'=>'success',
        );

        return redirect()->back()->with($notification);
    }


    public function view(){

        $contact = Contact::all();
        return view('admin.contact.view')->with(compact('contact'));
    }
}
