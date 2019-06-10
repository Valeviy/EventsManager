@extends('events::index')
@section('content')

    <div class="container">
        <div class="py-3 mt-5">
            <div class="container">
                <div class="row">
                    <div class="text-center col-md-7 mx-auto">
                        <h2>{{trans('eventmanager.create_new_event')}}</h2>
                        <p class="lead">{{trans('eventmanager.fill_below')}}</p>
                    </div>
                </div>
            </div>
        </div>
<event-form  step_name='{{trans('eventmanager.step')}}'
             :event_types = '{!! json_encode($eventTypes) !!}'
             :organizer_types = '{!! json_encode($oranizerTypes) !!}'
             :field_types = '{!! json_encode($customTypes)!!}'
             submit_title = '{{trans('eventmanager.submit')}}'
             v-bind:step1="{ name: '{{trans('eventmanager.main_information')}}',
                             title: '{{trans('eventmanager.title')}}',
                             title_placeholder: '{!! trans('eventmanager.add_event_title')!!}',
                             type: '{{trans('eventmanager.type_event')}}',
                             type_placeholder:'{{trans('eventmanager.choose_one')}}',
                             number_of_participants:'{{trans('eventmanager.number_of_participants')}} ',
                             number_of_participants_placeholder: '{!! trans('eventmanager.add_number_of_participants')!!}',
                             logo:'{{trans('eventmanager.logo')}}',
                             logo_placeholder:'{!! trans('eventmanager.upload_logo')!!}',
                            }"

             v-bind:step2="{ name: '{{trans('eventmanager.description_and_program')}}',
                             short_description: '{{trans('eventmanager.short_description')}}',
                             short_description_placehoder:'{!! trans('eventmanager.add_short_description') !!}',
                             full_description:'{!! trans('eventmanager.full_description') !!}',
                             program:'{!! trans('eventmanager.program') !!}',
                            }"

             v-bind:step3="{ name: '{{trans('eventmanager.date_time')}}',
                             oneday: '{!! trans('eventmanager.oneday_event') !!}',
                             beginning: '{!! trans('eventmanager.beginning_date') !!}',
                             beginning_placeholder: '{!! trans('eventmanager.select_beg_day') !!}',
                             ending:'{!! trans('eventmanager.ending_date') !!}',
                             ending_placeholder:'{!! trans('eventmanager.select_end_day') !!}',
                             reg_day:'{!!trans('eventmanager.registration_ending') !!}',
                             reg_day_placeholder:'{!! trans('eventmanager.select_end_day') !!}',
                            }"

             v-bind:step4="{ name: '{{trans('eventmanager.contact_information')}}',
                             city: '{{trans('eventmanager.city')}}',
                             city_placeholder:'{!! trans('eventmanager.add_city') !!}',
                             address:'{{trans('eventmanager.address')}}',
                             address_placeholder: '{!! trans('eventmanager.add_address') !!}',
                             website: '{{trans('eventmanager.website')}}',
                             website_placeholder: '{!! trans('eventmanager.add_website') !!}',
                             phone: '{{trans('eventmanager.phone')}}',
                             phone_placeholder: '{!! trans('eventmanager.add_phone') !!}',
                             email: '{{trans('eventmanager.email')}}',
                             email_placeholder: '{!! trans('eventmanager.add_email') !!}',
                            }"

             v-bind:step5="{ name: '{{trans('eventmanager.organizers')}}',
                             input_title: '{!! trans('eventmanager.name') !!}',
                             select_placeholder: '{!! trans('eventmanager.choose_one') !!}',
                             select_title: '{!! trans('eventmanager.organizers_type') !!}',
                             input_placeholder:  '{!! trans('eventmanager.add_name') !!}',
                            }"

             v-bind:step6="{ name: '{{trans('eventmanager.files_and_material')}}',
                             button: '{{trans('eventmanager.add_files')}}'
                            }"

             v-bind:step7="{ name: '{{trans('eventmanager.participant_reg_form')}}',
                             checkbox_title: '{!! trans('eventmanager.custom_registration_form') !!}',
                             input_title: '{!! trans('eventmanager.title_field') !!}',
                             select_placeholder: '{!! trans('eventmanager.select_type_field') !!}',
                             select_title: '{!! trans('eventmanager.type_field') !!}',
                             input_placeholder:  '{!! trans('eventmanager.add_title_field') !!}',
                            }"
>
</event-form>

    </div>

@endsection









