@extends('events::index')
@section('content')

    <header class="masthead" style="
        height: 50vh;
        min-height: 500px;
            background:linear-gradient(90deg,rgba(10,10,10,.5) 0,rgba(10,10,10,.6) 100%), url({{ $event->logo }});
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            color:white;">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-8 text-center" style="background-color:rgba(101, 116, 205,.9);margin-top: 250px;">
                    <h2 style="font-size: 4rem;text-shadow: 2px 3px 3px rgba(0,0,0,0.1);" class="font-weight-bold"  >{{$event->name}} </h2>
                    <h3 style="font-size: 2rem;text-shadow: 2px 3px 3px rgba(0,0,0,0.1);"class="font-weight-bold">({{$event->type}})</h3>
                </div>
            </div>
        </div>
    </header>

<section class="h-50" style="background-color:rgba(101, 116, 205,.3);" >
    <div class="container py-4 ">
    <div class="row ">
        <div class="col-md-10 mt-2">
           <p style="font-size: 1.3rem">{!! $event->short_description !!}</p>
        </div>
        <div class="col-md-2">
            <registration-form modal_title="Участвовать"
                               regbutton_title="Зарегистрироваться"
                               closebutton_title="Закрыть"
                               :event_fields='{!! json_encode($event->custom_fields) !!}'
                               user_id='{!! Auth::user()->id!!}'
                               event_id='{!! $event->id !!}'
                                ></registration-form>
        </div>
    </div>
    </div>
</section>
<section class="h-50" style="background-color:rgba(101, 116, 205,.1)">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8">
                <h2 class="text-center py-3 mt-5 mb-3" style="font-size: 2.5rem">О мероприятии <hr width="70%"></h2>

                {!! $event->full_description !!}

                <h2 class="text-center py-3 mt-5 mb-3" style="font-size: 2.5rem">Программа мероприятия <hr width="70%"></h2>
                {!! $event->program !!}

                <h2 class="text-center py-3 mt-5 mb-3" style="font-size: 2.5rem">Файлы <hr width="70%"></h2>
                @foreach($event_files as $event_file)
                    <div class="form-control mt-3"><i class="fas fa-file mr-5"></i> <a download href="{{$event_file['filename']}}">{!! basename($event_file['filename']) !!}</a>
                    </div>
                @endforeach

                <h2 class="text-center py-3 mt-5 mb-3" style="font-size: 2.5rem">Организаторы <hr width="70%"></h2>
                @foreach($event_organizers as $event_organizer)
                    <div>
                        <h3>{{$event_organizer->type}}</h3>
                        <h5 class="mt-3"> {{$event_organizer->name}} </h5>
                    </div>
                @endforeach
            </div>

            <div class="col-md-4 border-left ">

                <h2 class="text-center py-3 mt-5 mb-3 ml-3" style="font-size: 2.5rem">Даты проведения<hr width="70%"></h2>

                <h5 class="ml-3"><b>Начало:</b> {!! (new DateTime($event->beginning))->format('d-m-Y')!!}</h5>
                @if($event->ending)
                <h5 class="mt-3 ml-3"><b>Окончание:</b> {!! (new DateTime($event->ending))->format('d-m-Y') !!}</h5>
                @endif
                    <h5 class="mt-3 ml-3"><b>Окончание регистрации:</b>  {!! (new DateTime($event->reg_end))->format('d-m-Y')!!}</h5>

                <h2 class="text-center py-3 mt-5 mb-3 ml-3" style="font-size: 2.5rem">Контакты<hr width="70%"></h2>

                <h5 class="ml-3"><b>Город:</b> {!! $event->city!!}</h5>
                <h5 class="mt-3 ml-3"><b>Адрес:</b> {!! $event->address!!}</h5>
                <h5 class="mt-3 ml-3"><b>Телефон:</b> {!! $event->phone!!}</h5>
                <h5 class="mt-3 ml-3"><b>Сайт:</b> {!! $event->website!!}</h5>
                <h5 class="mt-3 ml-3"><b>Почта:</b> {!! $event->email!!}</h5>
            </div>
        </div>

    </div>
</section>

@endsection