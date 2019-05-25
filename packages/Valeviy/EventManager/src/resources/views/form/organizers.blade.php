
<h3 class="mb-5 mt-5" >{{trans('eventmanager.step')}} 5 : {{trans('eventmanager.organizers')}} </h3>


 <organizer input_title='{!! trans('eventmanager.name') !!}' select_placeholder='{!! trans('eventmanager.choose_one') !!}' select_title='{!! trans('eventmanager.organizers_type') !!}' input_placeholder='{!! trans('eventmanager.add_name') !!}' :types='{!! json_encode($oranizerTypes) !!}' v-model="fields" ></organizer>


<hr>
