<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstUserController;
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
    return view('welcome');
});
Route::get('adduser', function(){
    return view('first');
});
Route::post('saveuser', [FirstUserController::class, 'store'])->name('save_user');
return view('saveuser');
Route::get('userview', [FirstUserController::class, 'index']);
return view('userview');