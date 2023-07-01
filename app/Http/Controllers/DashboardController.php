<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index()
    {

        if(Auth::user()->hasRole('admin'))
        {
            return view('admindashboard');

        }elseif(Auth::user()->hasRole('farmer'))
        {
            return view('farmerdashboard');

        }elseif(Auth::user()->hasRole('guest'))
        {
            return view('guestdashboard');

        }
    }
}
