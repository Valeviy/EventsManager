@extends('events::index')
@section('content')
    <div class="py-4 ">
        <event-card title='{{trans('eventmanager.all_events')}}' :events='{!! json_encode($events) !!}' locale='{{config('app.locale')}}' link="/events/"
                    button_title="{{trans('eventmanager.participate')}}"></event-card>
        {{--<div class="container">--}}
            {{--<h2>Все мероприятия:</h2>--}}
            {{--<div class="row">--}}
                {{--@foreach($events as $event)--}}
                {{--<div class="col-md-4 p-3">--}}
                    {{--<div class="card  box-shadow">--}}
                        {{--<img class="card-img-top" style=" width: 100%;--}}
    {{--height: 15vw;--}}
    {{--object-fit: cover;"  src="{{ $event->logo }}" onclick="/events/{{$event->id}}">--}}
                        {{--<div class="card-body">--}}
                            {{--<h4 class="card-title"style=" text-overflow: ellipsis; width: inherit; white-space:pre; overflow:hidden; ">{{ $event->name }}</h4>--}}
                            {{--<small class="text-muted">{{ $event->type}}</small>--}}
                            {{--<p class="card-text mt-1" style=" text-overflow: ellipsis; width: inherit; white-space:pre; overflow:hidden; " >{{ $event->short_description }}</p>--}}
                            {{--<div class="d-flex justify-content-between align-items-center">--}}
                                {{--<div class="btn-group">--}}
                                    {{--<a  href="/events/{{$event->id}}" class="btn btn-outline-primary">Участвовать</a>--}}
                                {{--</div>--}}
                                {{--<small class="text-muted">{{  (new DateTime($event->beginning))->format('d-m-Y')}}</small>--}}
                            {{--<small class="text-muted">{{ $event->city}}</small> </div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--@endforeach--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
@endsection