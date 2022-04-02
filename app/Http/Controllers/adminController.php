<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;

class adminController extends Controller
{
    //this is a controller for the admins 

    // we use request type because its responsible with taking data from use
    function register(Request $req)
    {
         //This declares use of the model to be in relation
        //Inaitwa kudefine instance of it
        $admin = new admin;

        //This mean $user relation to column of database is equal to that from the htttp request which is linked to the input name
        // all this are entries to be saved.
        $admin->adminname=$req->adminname;
        $admin->email=$req->email;
        $admin->password=$req->password;
        $admin->save();

        // after the data is saved we proceed to the login page
        return redirect('adminlogin');
    }

    // creating a login function
    // checkinhg on user authentification
    // this is authentification phase on hault
    function adminAuth(Request $req)
    {

         $req->input('');
        

        return $req;
    }
    
}
