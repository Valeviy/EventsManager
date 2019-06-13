<?php

return [
    /*
    |--------------------------------------------------------------------------
    | EventManager event types settings
    |--------------------------------------------------------------------------
    */

    'event-types' => [

        'Lecture', 'Master Class', 'Seminar', 'Conference',
        'Public lesson', 'Excursion', 'Webinar', 'Meeting',
        'Concert', 'Training', 'Presentation', 'Coaching',
        'Workshop', 'Forum', 'Competition', 'Briefing',
        'Meetup', 'Hackathon'
    ],

    /*
    |--------------------------------------------------------------------------
    | EventManager organizer types settings
    |--------------------------------------------------------------------------
    */

    'organizer-types' => ['Organizer', 'Leading', 'Speaker', 'Master', 'Expert'],

    /*
    |--------------------------------------------------------------------------
    | EventManager database settings
    |--------------------------------------------------------------------------
    */
    'table-models' => [
        // Database connection for following tables.
        'connection' => 'mysql',

        //Users table and model.
        'users_table' => 'users',
        'users_model' => App\User::class,

        //Roles table and model.
        'roles_table' => 'roles',
        'roles_model' => Valeviy\EventManager\Role::class,

        // Permission table and model.
        'permissions_table' => 'permissions',
        'permissions_model' => Valeviy\EventManager\Permissions::class,

        // Event table and model.
        'events_table' => 'events',
        'events_model' => Valeviy\EventManager\Events::class,

        //Organizers table and model.
        'organizers_table' => 'organizers',
        'organizers_model' => Valeviy\EventManager\Organizer::class,

        //EventParticipants table and model.
        'event_participants_table' => 'event_participants',
        'event_participants_model' => Valeviy\EventManager\EventParticipant::class,

        //EventFiles table and model.
        'event_files_table' => 'event_files',
        'event_files_model' => Valeviy\EventManager\EventFile::class,

        //EventRequests table and model.
        'event_requests_table' => 'event_requests',
        'event_requests_model' => Valeviy\EventManager\EventRequest::class,

        // Pivot table
        'users_permissions_table' => 'users_permissions',
        'users_roles_table' => 'users_roles',
        'roles_permissions_table' => 'roles_permissions',


    ],



    /*
    |--------------------------------------------------------------------------
    | EventManager custom fields settings
    |--------------------------------------------------------------------------
    */

    'customfields-available' => true,

    /*
    |--------------------------------------------------------------------------
    | Custom field types settings
    |--------------------------------------------------------------------------
    */

    'field-types' => ['text', 'number', 'file', 'checkbox'],

    /*
    |--------------------------------------------------------------------------
    | Custom field structure settings
    |--------------------------------------------------------------------------
    */

    'field-structure' => [
        'name' => 'name',
        'type' => 'type',
    ],



    /*
    |--------------------------------------------------------------------------
    | EventManager upload setting
    |--------------------------------------------------------------------------
    */
    'upload' => [

        'disk' => 'public',

        'directory' => [
            'package_dir' => 'events',
            'logo' => 'logo',
            'file'  => 'files',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | EventManager html title
    |--------------------------------------------------------------------------
    */
    'title' => 'EventManager',

    /*
    |--------------------------------------------------------------------------
    | EventManager html title
    |--------------------------------------------------------------------------
    */
    'strong-title' => 'EvM',

    'directory' => 'EventManager',
];