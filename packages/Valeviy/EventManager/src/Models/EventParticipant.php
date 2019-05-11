<?php

namespace Valeviy\EventManager\Models;

use Illuminate\Database\Eloquent\Model;

class EventParticipant extends Model
{
    protected $fillable = [

        'user_id', 'event_id', 'promocode_id',
        'ticket_number', 'status', 'filled_fields'
    ];

    protected $casts = [
        'filled_fields' => 'array'
    ];

    /**
     * A event participant has one event.
     *
     */
    public function event()
    {
        $relatedModel = config('eventmanager.table-models.events_model');
        return $this->belongsTo(config($relatedModel), "id", "event_id");
    }

    /**
     * A event participant has one user.
     *
     */
    public function user()
    {
        $relatedModel = config('eventmanager.table-models.user_model');
        return $this->belongsTo(config($relatedModel), "id", "user_id");
    }

    /**
     * Get filled fields.
     *
     *
     *
     * @return array
     */

    public function getFilledFields()
    {
        $fieldsAvailable = config('eventmanager.customfields-available');
        $filledFields = $this['filled_fields'];

        if ($fieldsAvailable and $filledFields){
            return $filledFields;
        }

        return null;
    }


}
