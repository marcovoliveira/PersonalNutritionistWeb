<?php

//Grupo de vistas da nutricionista
Route::group(['middleware' => ['admin']], function () {
   
    Route::get('home', 'User\UserPersonalInformationController@index');


    Route::get('registar', function () {

   		return view('admin.registar');})->name('admin.registar');



Route::get('chat', 'ChatController@index');
Route::post('chat/send', 'ChatController@store');
Route::get('chat/{id}', 'ChatController@show');


Route::post('registar', 'Auth\RegisterController@create');

//Registar Informação Pessoal
Route::get('registar/personalinformation', 'User\UserPersonalInformationController@create');
Route::post('registar/personalinformation', 'User\UserPersonalInformationController@store');

// Registar anamenese alimentar
Route::get('registar/foodanamnesis', 'User\FoodAnamnesisController@create');
Route::post('registar/foodanamnesis', 'User\FoodAnamnesisController@store');

//Registar Avaliação Antropometrica 
Route::get('registar/anthropometricevaluation', 'User\AnthropometricevaluationController@create');
Route::post('registar/anthropometricevaluation/{id}', 'User\AnthropometricevaluationController@store');

// Associar plano alimentar
Route::get('registar/foodplaning', 'User\FoodPlanController@create');
Route::post('registar/foodplaning', 'User\FoodPlanController@store');

// Planos Alimentares
Route::get('foodplans', 'User\FoodPlanController@index');
Route::post('plan/registar', 'User\FoodPlanController@storePlan');

Route::get('plan/delete/{id}', 'User\FoodPlanController@destroy');
Route::post('plan/edit/{id}', 'User\FoodPlanController@update');
Route::post('plan/link/{id}', 'User\FoodPlanController@updateUserFoodPlan');

// Ver Dados Utente
Route::get('utente/{id}', 'User\UserPersonalInformationController@show');




// Editar dados utente
Route::post('utente/edit/{id}', 'User\UserPersonalInformationController@update');
//Editar Informação Clinica
Route::post('utente/edit/clinical/{id}', 'User\UserPersonalInformationController@updateClinic');
//Editar Informação nutricional
Route::post('utente/edit/nutricional/{id}', 'User\UserPersonalInformationController@updateNutritional');
//Editar informação de atividades
Route::post('utente/edit/activities/{id}', 'User\UserPersonalInformationController@updateActivities');
//Editar consulta
Route::post('utente/edit/consulta/{id}', 'User\AnthropometricEvaluationController@update');
//Editar anamnese
Route::post('utente/edit/anamnese/{id}', 'User\FoodAnamnesisController@update');


//Criar informação clinica
Route::post('utente/create/clinical/{id}', 'User\UserPersonalInformationController@createClinic');
//Criar informação nutricional
Route::post('utente/create/nutricional/{id}', 'User\UserPersonalInformationController@createNutritional');
//Criar informação de atividades
Route::post('utente/create/activities/{id}', 'User\UserPersonalInformationController@createActivities');
//Criar Anamnese
Route::post('utente/create/anamnese/{id}', 'User\FoodAnamnesisController@createAnamnese');



//Nova consulta
    Route::get('utente/criar/consulta/{id}', 'User\AnthropometricevaluationController@createNew');


// Ajax request
    Route::get('obterplano', 'User\FoodPlanController@show');
    Route::post('registar/plan/edit/{id}', 'User\FoodPlanController@update');
    Route::post('registar/plan/create', 'User\FoodPlanController@storePlan');


    //PDF
    Route::get('pdf/{id}', 'User\FoodPlanController@pdf')->name('plano_pdf');


    // Equivalentes

    Route::get('equivalentes', 'AlimentosController@show');

    Route::post('equivalentes/create', 'AlimentosController@store');

    Route::post('alimentos/create', 'EquivalentesController@store');

    Route::get('alimentos/{id}', 'AlimentosController@find');

    Route::get('equivalenteRemover/{special}', 'EquivalentesController@destroy');

    Route::get('alimentoRemover/{id}', 'AlimentosController@destroy');


});

