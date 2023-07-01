<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchuser()
    {
        $search_text = $_GET['searchbar'];

        $searchUser = User::where('email','like','%'.$search_text.'%')->get();
        return view('search.search-user',compact('searchUser'));
    }
}
