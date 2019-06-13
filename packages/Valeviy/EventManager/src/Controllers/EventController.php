<?php

namespace Valeviy\EventManager\Controllers;

use App\Http\Controllers\Controller;

use Carbon\Laravel\ServiceProvider;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Valeviy\EventManager\Models\Event;
use Valeviy\EventManager\Models\EventFile;
use Valeviy\EventManager\Models\EventRequest;
use Valeviy\EventManager\Models\Organizer;
use Valeviy\EventManager\Requests\CreateEventRequest;

class EventController extends Controller
{

    public function index(){
        $events = Event::all();
        return view('events::AllEvents.all-events',compact('events'));
    }

    public function show($id){
        $event = Event::find($id);
        $event_files = EventFile::where('event_id' , $event->id)->get();
        $event_organizers = Organizer::where('event_id',$event->id )->get();
        return view('events::Event.event',compact('event','event_files','event_organizers'));
    }

    public function edit(){
        $eventTypes = config('eventmanager.event-types');
        $oranizerTypes = config('eventmanager.organizer-types');
        $customAvailable = config('eventmanager.customfields-available');
        $customTypes = config('eventmanager.field-types');
        return view('events::form.form',compact('eventTypes','oranizerTypes','customAvailable','customTypes'));
    }


    public function create(CreateEventRequest $request){

        $organizers = json_decode($request['organizers'], true);

        $event = Event::create(request(['name', 'type','number_participants',
                                'short_description','full_description','program','reg_end','beginning',
            'ending', 'city', 'address', 'phone', 'website','email']));


        $logo_path = $request->file('logo')->storeAs(
            config('eventmanager.upload.directory.package_dir').'/'.config('eventmanager.upload.directory.logo'),
            'logo_event_'. $event->id . "." .$request->file('logo')->getClientOriginalExtension()  ,
            config('eventmanager.upload.disk')
        );

        $event['user_id'] = Auth::id();
        $event['logo'] = $logo_path;
        $event['custom_fields'] = json_decode($request['custom_fields'], false);
        $event->save();

        foreach ($organizers as $organizer){
            Organizer::create(['name' => $organizer['name'], 'type' => $organizer['type'], 'event_id' => $event->id]);
        }

        $files = $request['files'];

        foreach ($files as $file){
            $file_path =  $file->storeAs(
                config('eventmanager.upload.directory.package_dir').'/'.config('eventmanager.upload.directory.file'),
                $file->getClientOriginalName(), config('eventmanager.upload.disk')
            );
            EventFile::create(['event_id'=> $event->id, 'filename' => $file_path]);
        }


        return response()->json(['redirect'=>'/events/'.$event->id]);
    }


    public function moderate(){
        $events = Event::all();
        $table_titles = ['№',trans('eventmanager.title'), trans('eventmanager.status'), trans('eventmanager.accept'),trans('eventmanager.reject')];
        return view('events::moderate.requests',compact('events','table_titles'));
    }

    public function statusUpdate(Request $request){
        $event = Event::find($request['event_id']);
        $event['status'] = 1;
        $event->save();
        return $request->all();
    }

}
