<?php


Route::group(['middleware' => ['admin']], function () {
   
    Route::get('home', function () {
   
   		   return view('admin.home');})->name('home');


    Route::get('registar', function () {
   
   		return view('admin.registar');})->name('admin.registar');


Route::post('registar', 'Auth\RegisterController@create');
});
