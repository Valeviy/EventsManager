<?php

namespace Valeviy\EventManager;

use Illuminate\Support\ServiceProvider;

class EventManagerServiceProvider extends ServiceProvider{

    public function boot(){

        $this->loadViewsFrom(__DIR__ . '/resources/views/', 'events');
        $this->loadMigrationsFrom(__DIR__ . 'database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/Routes/web.php');

        $this->publishes([
            __DIR__ . '/config/eventmanager.php' => config_path('eventmanager.php'),
        ],'config');

        $this->publishes([
            __DIR__ . '/public' => public_path('vendor/Valeviy/EventManager'),
        ], 'public');

        $this->publishes([
            __DIR__ . '/public/fonts' => public_path(),
        ], 'font');

        $this->publishes([__DIR__.'/resources/lang' => resource_path('lang')], 'event-manager-lang');


    }

    public function register(){
        $this->app->bind('EventManager', function(){
            return new \Valeviy\EventManager\EventManager;
        });
    }

}