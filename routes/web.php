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
Route::get('/', 'monControleur@home')->name('home');

Route::get('/ing', 'monControleur@mesIngredients')->name('ingredients');

Route::get('/rec', 'monControleur@mesRecettes')->name('recettes');

Route::get('/mat', 'monControleur@monMatos')->name('materiel');

Route::get('/mon', 'monControleur@monMonayeur')->name('monnayeur');

// Route::get('/ing', ['uses' => 'monControleur@ingredients', 'as' => 'ingredients']);
//
// Route::get('/rec', ['uses' => 'monControleur@recettes', 'as' => 'recettes']);
//
// Route::get('/mat', ['uses' => 'monControleur@materiel', 'as' => 'materiel']);
//
// Route::get('/mon', ['uses' => 'monControleur@monnayeur', 'as' => 'monnayeur']);
