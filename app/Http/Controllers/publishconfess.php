<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\confession;

class publishconfess extends Controller
{
    //so this is the function on saving the unregistered users confessions
    function publish(Request $req)
    {
        $req->validate([
            'confession'=>'required'
        ]);

        $confession = new confession;
        $confession -> confession = $req -> confession;
        $confession -> save();

        // so this is a flash session
        // it sends the verification to user that the confession is sent
        // the tags'confession' used are in relation with the name in the hero form
        $data=$req->input('confession');
        $req->session()->flash('confession', $data);

        // here it redirects the redirects user to the hero page
        return redirect('/');
    }

}
