<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',function (){
    return view('home');
});
Route::prefix('challenges')->group(function(){
    Route::get('/','App\Http\Controllers\ChallengerController@index')->name('challenges.index');
    Route::get('/create','App\Http\Controllers\ChallengerController@create')->name('challenges.create');
    Route::post('/','App\Http\Controllers\ChallengerController@store')->name('challenges.store');
    Route::get('/{id}','App\Http\Controllers\ChallengerController@show')->name('challenges.show');
    Route::get('/{id}/edit','App\Http\Controllers\ChallengerController@edit')->name('challenges.edit');
    Route::put('/{id}','App\Http\Controllers\ChallengerController@edit')->name('challenges.update');
    Route::delete('/{id}','App\Http\Controllers\ChallengerController@destroy')->name('challenges.destroy');
});
Route::get('/auto','App\Http\Controllers\ResolutionController@auto')->name('challenges.auto');
Route::get('/resolution/{id}','App\Http\Controllers\ResolutionController@index')->name('resolution.index');
Route::post('/resolution/done/{id}','App\Http\Controllers\ResolutionController@done')->name('resolution.done');

