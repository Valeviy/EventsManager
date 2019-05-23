@extends('events::index')
@section('content')

    <div class="container">
        <div class="py-3">
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="text-center col-md-7 mx-auto"><i--}}
                                {{--class="fa d-block fa-5x mb-4 text-info fa-calendar"></i>--}}
                        {{--<h2>Create new event</h2>--}}
                        {{--<p class="lead">Fill in the fields below<br>(fields marked with * are required)</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>

        <form method="POST" action="" >
            <div class="container">
                <div id="app">

                    <step-navigation :steps="steps" :currentstep="currentstep">
                    </step-navigation>

                    <div v-show="currentstep == 1">
                        @include('events::form.main-information')
                    </div>

                    <div v-show="currentstep == 2">
                        @include('events::form.description-program')
                    </div>

                    {{--<div v-show="currentstep == 3">--}}
                        {{--@include('events::form.date-time')--}}
                    {{--</div>--}}

                    {{--<div v-show="currentstep == 4">--}}
                        {{--@include('events::form.contact')--}}
                    {{--</div>--}}
                    {{--<div v-show="currentstep == 5">--}}
                        {{--@include('events::form.organizers')--}}
                    {{--</div>--}}
                    {{--<div v-show="currentstep == 6">--}}
                        {{--@include('events::form.files')--}}
                    {{--</div>--}}
                    {{--@if($customAvailable)--}}
                        {{--<div v-show="currentstep == 7">--}}
                            {{--@include('events::form.registration-form')--}}
                        {{--</div>--}}
                    {{--@endif--}}
                    <step v-for="step in steps" :currentstep="currentstep" :key="step.id" :step="step"
                          :stepcount="steps.length" @step-change="stepChanged">
                    </step>
                </div>
            </div>
        </form>
    </div>
@endsection














{{--<hr class="mb-4">--}}
{{--<h4 class="mb-3"><b>Organizers</b></h4>--}}
{{--<div class="row">--}}
{{--<a class="btn btn-secondary m-2" href="#">Add organizer</a>--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--<div class="col-md-6 mb-3"> <label for="number_participants">Name*</label>--}}
{{--<input type="text" class="form-control" placeholder="" required="required" name="number_participants" id="number_participants">--}}
{{--<div class="invalid-feedback"> </div>--}}
{{--</div>--}}
{{--<div class="col-md-6 mb-3"> <label for="type">Type*</label>--}}
{{--<select class="custom-select d-block w-100" id="type" required="required" name="type">--}}
{{--@if($oranizerTypes)--}}
{{--@foreach($oranizerTypes as $type)--}}
{{--<option value="{{$type}}">{{$type}}</option>--}}
{{--@endforeach--}}
{{--@endif--}}
{{--</select>--}}
{{--<div class="invalid-feedback">  </div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<hr class="mb-4">--}}
{{--<h4 class="mb-3"><b>Files and additional material</b></h4>--}}
{{--<div class="row">--}}
{{--<div class="col-md-12 mb-3"> <label for="files">Add file</label>--}}
{{--<input type="file" class="form-control-file" placeholder="" required="required" id="files" name="files">--}}
{{--<div class="invalid-feedback"> </div>--}}
{{--</div>--}}
{{--</div>--}}

{{--@if($customAvailable)--}}
{{--<hr class="mb-4">--}}
{{--<h4 class="mb-3"><b>Participant registration form</b></h4>--}}
{{--<div class="row">--}}
{{--<div class="col-md-6 mb-3"><label class="mr-2" for="">Custom registration form</label>--}}
{{--<label class="switch">--}}
{{--<input type="checkbox">--}}
{{--<span class="slider round "></span>--}}
{{--</label>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--<a class="btn btn-secondary m-2" href="#">Add field</a>--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--<div class="col-md-6 mb-3"> <label for="number_participants">Title*</label>--}}
{{--<input type="text" class="form-control" placeholder="" required="required" name="number_participants" id="number_participants">--}}
{{--<div class="invalid-feedback"> </div>--}}
{{--</div>--}}
{{--<div class="col-md-6 mb-3"> <label for="type">Type*</label>--}}
{{--<select class="custom-select d-block w-100" id="type" required="required" name="type">--}}
{{--@if($customTypes)--}}
{{--@foreach($customTypes as $type)--}}
{{--<option value="{{$type}}">{{$type}}</option>--}}
{{--@endforeach--}}
{{--@endif--}}
{{--</select>--}}
{{--<div class="invalid-feedback">  </div>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endif--}}
{{--<div class="custom-control custom-checkbox">--}}
{{--<input type="checkbox" class="custom-control-input" id="ticket-available" value="on"> <label class="custom-control-label" for="ticket-available">Ticket available</label>--}}
{{--</div>--}}
{{--<div class="custom-control custom-checkbox">--}}
{{--<input type="checkbox" class="custom-control-input" id="promocode-available" value="on"> <label class="custom-control-label" for="promocode-available">Promocode available</label>--}}
{{--</div>--}}
{{--<hr class="mb-4">--}}
{{--</div>--}}
{{--</form>--}}