<?php

Route::group(['namespace'=> 'Valeviy\EventManager\Controllers', 'middleware' => ['web','auth']],function (){
    Route::get('/event', 'EventController@edit');
    Route::post('/event', 'EventController@create');
    Route::get('/events', 'EventController@index');
    Route::get('/events/{event_id}','EventController@show')->name('event');
    Route::get('/moderate', 'EventController@moderate');
    Route::post('/moderate', 'EventController@statusUpdate');

    Route::get('/moderate/{event_id}', 'EventController@show')->name('event');
});

