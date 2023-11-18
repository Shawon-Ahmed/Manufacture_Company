<?php

use Illuminate\Support\Facades\Route;

//frontend


//backend
use App\Http\Controllers\backend\dashboardController;

/*
|--------------------------------------------------------------------------
| frontend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| backed Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
    route::group(['prefix' => 'admin'],  function(){
        route::get('/dashboard', [dashboardController::class, 'index'])->name('admin.dashboard');
        
    });

