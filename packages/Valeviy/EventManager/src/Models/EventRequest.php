<?php

namespace Valeviy\EventManager\Models;

use Illuminate\Database\Eloquent\Model;

class EventRequest extends Model
{
    protected $fillable = [

        'event_id', 'status', 'answer'
    ];

    /**
     * A request has one event.
     *
     */
    public function event()
    {
        $relatedModel = config('eventmanager.table-models.events_model');
        return $this->belongsTo(config($relatedModel), "id", "event_id");
    }
}
