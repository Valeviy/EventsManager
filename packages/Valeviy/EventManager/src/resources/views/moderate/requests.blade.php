@extends('events::index')
@section('content')
<div class="container h-100">
    <h3 class="mb-5">Модерация событий</h3>
<event-request :events='{!! json_encode($events) !!}' :table_titles='{!! json_encode($table_titles) !!}' message_title="{{trans('eventmanager.add_message')}}" ></event-request>
    </div>
@endsection