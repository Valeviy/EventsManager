<?php

namespace Valeviy\EventManager\Models;

use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    protected $fillable = [

        'name', 'event_id', 'type',
    ];

    /**
     * A event organizer has one event.
     *
     */
    public function event()
    {
        $relatedModel = config('eventmanager.table-models.events_model');
        return $this->belongsTo(config($relatedModel), "id", "event_id");
    }
}
