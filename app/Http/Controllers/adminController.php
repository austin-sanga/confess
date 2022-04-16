<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\admin;


class adminController extends Controller
{
    //this is a controller for the admins 

    // we use request type because its responsible with taking data from use
    function register(Request $req)
    {
        // this is to validate that the user fills in the fields
        // an array of what to validate is passed through
        $req->validate([
            'adminname'=>'required |unique:admins',
            'email'=>'required',
            'password'=>'required'
        ]);

         //This declares use of the model to be in relation
        //Inaitwa kudefine instance of it
        $admin = new admin;

        //This mean $user relation to column of database is equal to that from the htttp request which is linked to the input name
        // all this are entries to be saved.
        $admin->adminname=$req->adminname;
        $admin->email=$req->email;

        // hashing password
        // then passing it as password 
        $password = request('password');
        $hashed = Hash::make($password);

        $admin->password=$hashed;
        $admin->save();

        // after the data is saved we proceed to the login page
        return redirect('adminlogin');
    }

    // creating a login function
    // checkinhg on user authentification
    // this is authentification phase on hault
    function login(Request $request)
    {

        // passing on the validation of the login details
        // And passing them onto another variable
       $credentials =  $request->validate([
            'adminname' => ['required'],
            'password' => ['required'],
        ]);

        // checking match of the filled data with the database
        if (Auth::attempt($credentials))
        {
            $request->session()->regenerate();

            // i passed the route of a controller to view confessions to a view
            return redirect()->intended('confession'); 
        }

        return back()->withErrors([
            'adminname'=>'The provided credentials do not match our records.'
        ])->onlyInput('adminname');
        
    }
    
}
