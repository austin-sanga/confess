<?php

use Illuminate\Support\Facades\Route;
// controller to publish confessions
use App\Http\Controllers\publishconfess;
// controller for admin to view confessions
use App\Http\Controllers\unconfessions;
// controllers for admin
use App\Http\Controllers\adminController;
// test tweet
use App\Http\Controllers\mediacontroller;

// test link & dont produce
use App\Http\Controllers\testcontroller;

use Atymic\Twitter\Facade\Twitter;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// this is the route to the first hero page
Route::view('/', 'index');

Route::view('/confess', 'index');

// route to the publishing controller,
// the one that deals with insertion of data in the database
Route::post('published',[publishconfess::class,'publish']);

// controller route of the unconfessions
// to which it will later pass the view to show the unconfessions view
Route::get('confession',[unconfessions::class,'show']);

// view to the admin registration
Route::view('adminreg','adminreg');

// view for the admin login area
// dont use redirect to restrict access mention view
Route::get('/adminlogin',function(){
    if (session()->has('adminname'))
    {
        return view('/');
    }
    return view('/adminlogin');

});

// // Route for the login function via the admins controller
// Route::post('/login',[adminController::class,'login']);

// // logout function being passed
// Route::get('/logout',[adminController::class,'logout']);


// Routes passing the same controller can be passed in a group at once
Route::controller(adminController::class)->group(function () {
    Route::post('/login', 'login');
    Route::get('/logout', 'logout');
    Route::post('/adminregister','register');
});

Route::get('media/{query}',[mediacontroller::class,'searchRecent']);

//test controller route
Route::get("test",[testcontroller::class,'test']);

// communication test site.
// Route::get("talk",[testcontroller::class,'talk']);
Route::view('sema',"sema");
Route::view('sema2',"sema2");

Route::post('sema',[testcontroller::class,'semasave']);
Route::post('sema2',[testcontroller::class,'semasave']);

Route::get('sema',[testcontroller::class,'semaget']);
Route::get('sema2',[testcontroller::class,'semaget']);





