<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowroomController;

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

Route::get('/', function () {
    return view('tampilan_M5.HomeAfter');
});

Route::get('/Add_Feby', function () {
    return view('/tampilan_M5/Add_Feby');
});

Route::get('/List_Feby', function () {
    return view('/tampilan_M5/List_Feby');
});

Route::resource('tampilan_M5', ShowroomController::class);
Route::get('/tampilan_M5', 'App\Http\Controllers\ShowroomController@create');
	
Route::post('/tampilan_M5', 'App\Http\Controllers\ShowroomController@store');