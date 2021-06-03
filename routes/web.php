<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\CargoController;
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
//register ekranından başlatma route
Route::get('/', function () {
    return view('auth.register');
});
//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});


// vehicle modulu user için kullanma routu user sadece r yapabiliyor
  Route::group(['middleware' => ['auth', 'role:admin|user']], function() {
         Route::resource('/vehicles', VehicleController::class);
          });


// // vehicle modulu Admin için kullanma routu admin c,r,u,d hepsini yapabiliyor        
//  Route::group(['middleware' => ['auth', 'role:admin']], function() {
//          Route::resource('/vehicles', VehicleController::class);
//           });



          // cargo modulu user için kullanma routu user sadece r yapabiliyor
            Route::group(['middleware' => ['auth', 'role:admin|user']], function() {
                Route::resource('/cargos', CargoController::class);
                });
        // // cargo modulu Admin için kullanma routu admin c,r,u,d hepsini yapabiliyor        
        //     Route::group(['middleware' => ['auth', 'role:admin']], function() {
        //             Route::resource('/cargos', CargoController::class);
        //             });          


require __DIR__.'/auth.php';
