<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $q = $request->q;
        $count = 1;
        return view('search.index',compact('q','count'));
    }
}
