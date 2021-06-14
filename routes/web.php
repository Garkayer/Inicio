<?php


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
        Route::view('/', 'home1')->name('home1');

        Route::view('/Aprende', 'Aprende')->name('Aprende');

        Route::view('/AcercaDeNosotros', 'AcercaDeNosotros')->name('AcercaDeNosotros');

        Route::view('/Directorio', 'Directorio')->name('Directorio');

        Route::view('/educativo', 'educativo')->name('educativo');

        Route::view('/TiposDeReciclaje', 'TiposDeReciclaje')->name('TiposDeReciclaje');



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home1');
