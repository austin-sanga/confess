<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\confession;

class unconfessions extends Controller
{
    //this controller is respondible of presenting confessions
    function show()
    {
        $data = confession::all();
        return view('unconfessions',['confession'=>$data]);

    }
}

