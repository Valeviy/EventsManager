<?php

Route::group(['namespace'=> 'Valeviy\EventManager\Controllers'],function (){
    Route::get('/event', 'EventController@edit');
    Route::post('/event', 'EventController@create');
    Route::get('/events', 'EventController@index');
});




