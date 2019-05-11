<?php

namespace Valeviy\EventManager\Models;

use \Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Facades\Storage;


class Event extends Model
{
    protected $fillable = [

        'name', 'type', 'short_description',
        'full_description', 'city', 'address',
        'begin', 'end', 'reg_end', 'number_participants',
        'logo', 'website', 'email', 'phone', 'program',
        'ticket_available', 'promocode_available',
        'status','custom_fields'
    ];

    protected $casts = [
        'custom_fields' => 'array'
    ];

    /**
    * Get logo attribute.
    *
    * @param string $logo
    *
    * @return string
    */

    public function getLogoAttribute($logo)
    {
        $disk = config('eventmanager.upload.disk');

        if ($logo && array_key_exists($disk, config('filesystems.disks'))) {
            return Storage::disk(config('eventmanager.upload.disk'))->url($logo);
        }

        return null;
    }

    /**
     * Get custom fields.
     *
     *
     *
     * @return array
     */

    public static function getCustomFields(Event $event)
    {
        $fieldsAvailable = config('eventmanager.customfields-available');
        $customFields = $event['custom_fields'];

        if ($fieldsAvailable and $customFields){
            return $customFields;
        }

        return null;
    }


    /**
    * A event has to many files.
    *
    */

    public function files()
    {
        $relatedModel = config('eventmanager.table-models.event_files_model');

        return $this->hasMany(config($relatedModel), 'event_id','id');
    }

    /**
     * A event has to many participants.
     *
     */

    public function participants()
    {
        $relatedModel = config('eventmanager.table-models.event_participants_model');

        return $this->hasMany(config($relatedModel), 'event_id','id');
    }

    /**
     * A event has to many organizers.
     *
     */

    public function organizers()
    {
        $relatedModel = config('eventmanager.table-models.organizers_model');

        return $this->hasMany(config($relatedModel), 'event_id','id');
    }

    /**
     * A event has one request.
     *
     */

    public function request()
    {
        $relatedModel = config('eventmanager.table-models.event_requests_model');

        return $this->hasOne(config($relatedModel), 'event_id','id');
    }



}
