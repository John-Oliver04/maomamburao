<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seen;

class SeenController extends Controller
{
    function seen(Request $request)
    {
        $seen = new Seen;
        $seen->idno = $request->input('message');
        $seen->save();
        return redirect()->back()->with('success','Successfully Replied!');

    }
}
