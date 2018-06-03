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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homeVisitor', 'HomeController@indexVisitor')->name('homeVisitor');

Route::get('/read', 'Bois\BoisController@read')->name('read');
Route::get('/readVisitor', 'Bois\BoisController@readVisitor')->name('readVisitor');

Route::get('/events', 'EventsController@events')->name('eveniment');
Route::get('/eventsVisitor', 'EventsController@eventsVisitor')->name('evenimentVisitor');

//pour bois et type
Route::get('/create','Bois\BoisController@create') ->name('create');
Route::post('/created', 'Bois\BoisController@created')->name('created');
Route::get('/delete/{id}','Bois\BoisController@delete') ->name('delete');
Route::get('/update/{id}', 'Bois\BoisController@update')->name('update');
Route::post('/updated','Bois\BoisController@updated')->name('updated');

//pour la demander(+entreprise, representant)
Route::get('/readAll', 'Demander\DemanderController@readAll')->name('readDemander');
Route::get('/createDemander','Demander\DemanderController@create') ->name('createDemander');
Route::post('/createdDemander', 'Demander\DemanderController@created')->name('createdDemander');
Route::get('/deleteDemander/{id}','Demander\DemanderController@delete') ->name('deleteDemander');
Route::get('/updateDemander/{id}', 'Demander\DemanderController@update')->name('updateDemander');
Route::post('/updatedDemander','Demander\DemanderController@updated')->name('updatedDemander');
