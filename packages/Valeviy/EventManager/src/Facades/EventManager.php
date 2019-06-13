<?php
    namespace Valeviy\EventManager\Facades;

    use Illuminate\Support\Facades\Facade;

    class EventManager extends Facade {

        protected static function getFacadeAccessor()
        {
            return \Valeviy\EventManager\EventManager::class;
        }

    }



