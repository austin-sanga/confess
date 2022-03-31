<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\publishconfess;
use App\Http\Controllers\unconfessions;

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