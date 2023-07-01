<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactRequest;

class ReplyController extends Controller
{
    function reply(Request $request)
    {

        ContactRequest::where('id',$request->input('msgid'))->delete();

        $reply = new ContactRequest();
        $reply->name = $request->input('name');
        $reply->contact = $request->input('contact');
        $reply->message = $request->input('txtreply');
        $reply->email = $request->input('email');
        $reply->save();

        return redirect()->back()->with('success','Successfully Replied!');
    }



}
