
<h3 class="mb-5 mt-5" >{{trans('eventmanager.step')}} 1: {{trans('eventmanager.main_information')}} </h3>

<div class="row">
    <div class="col-md-12 mb-3">
        <label for="name">{{trans('eventmanager.title')}} *</label>
        <input type="text" class="form-control" placeholder='{!! trans('eventmanager.add_event_title')!!}' id="name" required="required" name="name" v-model="name">
    </div>
</div>
<div class="row">
    <div class="col-md-6 mb-3"><label for="type">{{trans('eventmanager.type_event')}} *</label>
        <select class="custom-select d-block w-100" id="type" required="required" name="type" v-model="type">
            <option disabled value="">{{trans('eventmanager.choose_one')}}</option>
            @if($eventTypes)
                @foreach($eventTypes as $type)
                    <option value="{{$type}}">{{$type}}</option>
                @endforeach
            @endif
        </select>
    </div>
    <div class="col-md-6 mb-3"><label for="number_participants">{{trans('eventmanager.number_of_participants')}} </label>
        <input type="text" class="form-control" placeholder='{!! trans('eventmanager.add_number_of_participants')!!}' name="numberParticipants"
               id="number_participants" v-model="numberParticipants">
    </div>
</div>
<div class="row">
    <div class="col-md-12 mb-3"><label for="logo">{{trans('eventmanager.logo')}}</label>
        <logo v-model="logo" name="logo" title='{!! trans('eventmanager.upload_logo')!!}'></logo>
    </div>
</div>

<hr>
