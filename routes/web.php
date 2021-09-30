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
        Route::view('/', 'home')->name('home');

        Route::view('/Aprende', 'Aprende')->name('Aprende');

        Route::view('/AcercaDeNosotros', 'AcercaDeNosotros')->name('AcercaDeNosotros');

        Route::view('/Directorio', 'Directorio')->name('Directorio');

        Route::view('/educativo', 'educativo')->name('educativo');

        Route::view('/TiposDeReciclaje', 'TiposDeReciclaje')->name('TiposDeReciclaje');

        Route::view('/Beneficios', 'Beneficios')->name('Beneficios');

        Route::view('/Contaminacion', 'Contaminacion')->name('Contaminacion');

        Route::view('/Cuidar', 'Cuidar')->name('Cuidar');


        Route::view('/ChatBot', 'ChatBot')->name('ChatBot');



      
        






        





        







Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
