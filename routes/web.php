<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;
use App\Http\Controllers\App\ad;

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
    return view('main');
});

Route::get('/ad/job', function () {
    return view('job');
});

Route::get('/ad/sell', function () {
    return view('sell');
});

Route::get('/ad/swap', function () {
    return view('swap');
});

Route::get('/ad/rent', function () {
    return view('rent');
});

Route::get('/ad/buy', function () {
    return view('buy');
});

Route::get('/ad/list', [AdController::class, 'adlist']);
Route::post('/ad/create', [AdController::class, 'store']);
Route::post('/ad/update/{id}', [AdController::class, 'updatepost', $id] );
Route::get('/ad/edit/{id}', [AdController::class, 'updateget']);
route::get('/ad/delete/{id}' , [AdController::class, 'delete']); 







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
