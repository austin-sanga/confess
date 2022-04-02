<?php

use Illuminate\Support\Facades\Route;
// controller to publish confessions
use App\Http\Controllers\publishconfess;
// controller for admin to view confessions
use App\Http\Controllers\unconfessions;
// controllers for admin
use App\Http\Controllers\adminController;

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
Route::view('/', 'hero');

// route to the publishing controller, 
// the one that deals with insertion of data in the database
Route::post('published',[publishconfess::class,'publish']);

// controller route of the uconfessions
// to which it will later pass the view to show the unconfessions view
Route::get('confessions',[unconfessions::class,'show']);

// Route for the admins controller
Route::post('adminregister',[adminController::class,"register"]);

// view to the admin registration
Route::view('adminreg','adminreg');

// view for the admin login area
Route::view('adminlogin','adminlogin');

// Route for the adminAuth function via the admis controller
// this route currently has no progress on hault
Route::get('logedin',[adminController::class,'adminAuth']);