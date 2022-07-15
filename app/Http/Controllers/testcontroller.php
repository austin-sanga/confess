<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

}





