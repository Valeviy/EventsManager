<h3 class="mb-5 mt-5" >{{trans('eventmanager.step')}}  7: {{trans('eventmanager.participant_reg_form')}}</h3>
<checkbox title='{!! trans('eventmanager.custom_registration_form') !!}'  v-model="custom_fields"></checkbox>
<input-fields title='{!! trans('eventmanager.title_field') !!}' title_placeholder='{!! trans('eventmanager.add_title_field') !!}'  type='{!! trans('eventmanager.type_field') !!}' type_placeholder='{!! trans('eventmanager.select_type_field') !!}' :types='{!! json_encode($customTypes)!!}' v-model="fields" :dis="custom_fields"></input-fields>
<hr>
