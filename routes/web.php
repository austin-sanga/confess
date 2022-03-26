<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\publishconfess;

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
Route::post('published',[publishconfess::class,'publish']);
