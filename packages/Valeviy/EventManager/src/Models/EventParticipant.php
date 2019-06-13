<?php

namespace Valeviy\EventManager\Models;

use Illuminate\Database\Eloquent\Model;

class EventParticipant extends Model
{
    protected $fillable = ['user_id', 'event_id', 'filled_fields'];

    protected $casts = [
        'filled_fields' => 'array'
    ];

    public function event()
    {
        $relatedModel = config('eventmanager.table-models.events_model');
        return $this->belongsTo(config($relatedModel), "id", "event_id");
    }

    public function user()
    {
        $relatedModel = config('eventmanager.table-models.user_model');
        return $this->belongsTo(config($relatedModel), "id", "user_id");
    }

}


