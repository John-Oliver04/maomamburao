<?php

namespace App\Http\Controllers;

use App\Models\ContactRequest;
use Illuminate\Http\Request;

class ContactRequestController extends Controller
{


    public function saveRequest(Request $request)
    {
        $contactRequest = new ContactRequest;

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'contact'=>'required',
            'calldate'=>'required',
            'calltime'=>'required',
            'message'=>'required',

        ]);

        $contactRequest->name = $request->input('name');
        $contactRequest->email = $request->input('email');
        $contactRequest->contact = $request->input('contact');
        $contactRequest->calldate = $request->input('calldate');
        $contactRequest->calltime = $request->input('calltime');
        $contactRequest->message = $request->input('message');

        $contactRequest->save();

        return redirect(url('/callback-request'));
    }

}
