<?php

namespace App\Http\Controllers;

use App\Contact;
use App\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;
use Auth;
class ContactController extends Controller
{
    public $x=0;
  

    public function index()
    {
        $contacts = Contact::all();
        $users=User::all();

        return view('contact.index',compact('contacts'));
    }
    public function show($id)
    {
        $contact = Contact::find($id);
        return view('contact.show',compact('contact'));
    }

    public function destroy($id)
    {
        Contact::find($id)->delete();
        Toastr::success('Contact Message successfully deleted','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function sendMessage(Request $request)
    {
        
       
        $this->validate($request,[
            'subject' => 'bail|required',
            'message' => 'bail|required|alpha_num',
        ]);

        $contact = new Contact();
        
        $user = new User();
        $contact->user_id= Auth::user()->id;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        
    
    
            $contact->save();
             Toastr::success('Your message successfully send.','Success',["positionClass" => "toast-top-right"]);
        
       

        return view ('download');
        
    }

    public function user()
    {
        
        
        return view('contact.user');;
    }
}
