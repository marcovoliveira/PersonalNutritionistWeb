<?php

//Grupo de vistas da nutricionista
Route::group(['middleware' => ['admin']], function () {
   
 
// Mostrar dashboard aka home
    Route::get('home', function () {
   
   		   return view('admin.home');})->name('home');





//Registar Utente
    Route::get('registar', function () {
   
   		return view('admin.registar');})->name('admin.registar');

Route::post('registar', 'Auth\RegisterController@create');

//Registar Informação Pessoal
Route::get('registar/personalinformation', 'User\UserPersonalInformationController@create');
Route::post('registar/personalinformation', 'User\UserPersonalInformationController@store');

// Registar anamenese alimentar
Route::get('registar/foodanamnesis', 'User\FoodAnamnesisController@create');
Route::post('registar/foodanamnesis', 'User\FoodAnamnesisController@store');

//Registar Avaliação Antropometrica 
Route::get('registar/anthropometricevaluation', 'User\AnthropometricevaluationController@create');
Route::post('registar/anthropometricevaluation', 'User\AnthropometricevaluationController@store');



});
