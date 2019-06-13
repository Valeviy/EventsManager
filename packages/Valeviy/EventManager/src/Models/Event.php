<?php

namespace Valeviy\EventManager\Models;

use \Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Facades\Storage;


class Event extends Model
{
    protected $fillable = [

        'name', 'type', 'short_description',
        'full_description', 'city', 'address',
        'beginning', 'ending', 'reg_end', 'number_participants',
        'logo', 'website', 'email', 'phone', 'program', 'user_id',
        'status','custom_fields'
    ];

    protected $casts = [
        'custom_fields' => 'array'
    ];


    public function files()
    {
        $relatedModel = config('eventmanager.table-models.event_files_model');

        return $this->hasMany(config($relatedModel), 'event_id','id');
    }


    public function participants()
    {
        $relatedModel = config('eventmanager.table-models.event_participants_model');

        return $this->hasMany(config($relatedModel), 'event_id','id');
    }

    public function organizers()
    {
        $relatedModel = config('eventmanager.table-models.organizers_model');

        return $this->hasMany(config($relatedModel), 'event_id','id');
    }


    public function request()
    {
        $relatedModel = config('eventmanager.table-models.event_requests_model');

        return $this->hasOne(config($relatedModel), 'event_id','id');
    }

}
