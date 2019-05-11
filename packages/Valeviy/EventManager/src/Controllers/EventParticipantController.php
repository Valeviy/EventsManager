<?php

namespace Valeviy\EventManager\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

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
        //создание заявки
    }
}
