<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contactPage() {
 
        return view('contacts');
    
    }
    
    public function contactSend(Request $request) {
       

        $tuonome = $request->input('tuonome');
        $strument = $request->input('strument');
        $description = $request->input('description');
         
        $contactMail = new ContactMail($tuonome, $strument, $description);

        // comando per inviare la mail con Laravel
        
        Mail::to('info@hack70.it')->send($contactMail);





}


}



