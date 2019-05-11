<?php

Route::group(['namespace'=> 'Valeviy\EventManager\Controllers'],function (){
    Route::get('/event', 'EventController@edit');
    Route::get('/events', 'EventController@index');
});




