<?php

namespace Valeviy\EventManager\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Valeviy\EventManager\Models\Event;

class EventController extends Controller
{
    public function index(){
//        $events = Event::all();
        return view('events::AllEvents.all-events');
        //отображение всех мероприятий с лого, название, дата начала, город
    }

    public function show($id){
        $event = Event::find($id);
        return $event;
        //отображение одного мероприятия
    }

    public function edit(){
        $eventTypes = config('eventmanager.event-types');
        $oranizerTypes = config('eventmanager.organizer-types');
        $customAvailable = config('eventmanager.customfields-available');
        $customTypes = config('eventmanager.field-types');
        return view('events::form.form',compact('eventTypes','oranizerTypes','customAvailable','customTypes'));
    }

    public function update($id){
        //редактирование мероприяти
    }

    public function create(Request $request){
        var_dump($request->all());
    }

}
