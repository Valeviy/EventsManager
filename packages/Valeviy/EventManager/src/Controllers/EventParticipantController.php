<?php

namespace Valeviy\EventManager\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Valeviy\EventManager\Models\EventParticipant;

class EventParticipantController extends Controller
{
    public function index($id){
        //отображение всех заявок на мероприятие
    }

    public function show($eventid, $userid){
        //отображение заявки
    }

    public function edit($eventid, $userid){
        //редактирование заявки
    }

    public function create(Request $request){
        $participant = EventParticipant::create(request(['user_id','event_id']));
        $participant['filled_fields'] = json_decode($request['filled_fields'], false);
        $participant->save();

    }
}
