<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

// communication model
use App\Models\talk;

class testcontroller extends Controller
{
    //
    function test(){
        $myString = 'This is from itsolutionstuff.com website.';
    $contains = Str::contains($myString, 'site');
        if($contains==1){
            return 0;
        }else return 3;

    }

   /*  function test(){
        return 0;
    } */

    // communication test
    // saving to database
    function semasave(Request $req){
        $convo = new talk;
        $convo -> party = $req ->party;
        $convo -> message = $req -> message;
        $convo -> save();
        return redirect()->back(); /* takes user back to the previous page */

    }

    // calling from database
    function semaget(){
        $sematext = talk::all();
        return view('sema',['sematext'=>$sematext]);
    }
}





