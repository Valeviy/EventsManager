@extends('events::index')
@section('content')

    <div class="container" >
        <div class="py-3 mt-5">
            <div class="container">
                <div class="row">
                    <div class="text-center col-md-7 mx-auto">
                        <h2>Create new event</h2>
                        <p class="lead">Fill in the fields below (fields marked with * are required)</p>
                    </div>
                </div>
            </div>
        </div>

        <form method="POST" action=""  id="ticketForm">
            {{--<div class="container sub-page ticketForm" >--}}
                <div id="app">
                {{--<div id="accordion" role="tablist" aria-multiselectable="true">--}}
                    {{--<div class="card">--}}
                    {{--<div class="card-header" id="headingOne">--}}
                        {{--<h5 class="mb-0">--}}
                            {{--<h4 style="font-size: 24px">--}}
                                {{--Step 1: Main Information--}}
                            {{--</h4>--}}
                        {{--</h5>--}}
                    {{--</div>--}}

                    {{--<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">--}}
                        {{--<div class="card-body">--}}
                            {{--@include('events::form.main-information')--}}
                            {{--<a data-parent="#accordion" href="#headingTwo" class="btn btn-success continue">Continue</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                    {{--<div class="card">--}}
                        {{--<div class="card-header" id="headingTwo">--}}
                            {{--<h5 class="mb-0">--}}
                                {{--<h4 style="font-size: 24px">--}}
                                    {{--Step 2: Description and Event Program--}}
                                {{--</h4>--}}
                            {{--</h5>--}}
                        {{--</div>--}}
                        {{--<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">--}}
                            {{--<div class="card-body">--}}
                                {{--@include('events::form.description-program')--}}
                            {{--</div>	 <a data-parent="#accordion" href="#headingThree" class="btn btn-success continue">Continue</a>--}}
                            {{--<a data-parent="#accordion" href="#headingOne" class="btn btn-danger previous">Previous</a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    {{--<div class="card">--}}
                        {{--<div class="card-header" id="headingThree">--}}
                            {{--<h5 class="mb-0">--}}
                                {{--<h4 style="font-size: 24px">--}}
                                    {{--Step 3: Date and Time Information--}}
                                {{--</h4>--}}
                            {{--</h5>--}}
                        {{--</div>--}}
                        {{--<div id="collapseTwo" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">--}}
                            {{--<div class="card-body">--}}
                                {{--@include('events::form.date-time')--}}
                            {{--</div>	<a data-parent="#accordion" href="#headingFour" class="btn btn-success continue">Continue</a>--}}
                            {{--<a data-parent="#accordion" href="#headingTwo" class="btn btn-danger previous">Previous</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="card">--}}
                        {{--<div class="card-header" id="headingFour">--}}
                            {{--<h5 class="mb-0">--}}
                                {{--<h4 style="font-size: 24px">--}}
                                    {{--Step 4: Contact Information--}}
                                {{--</h4>--}}
                            {{--</h5>--}}
                        {{--</div>--}}
                        {{--<div id="collapseTwo" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">--}}
                            {{--<div class="card-body">--}}
                                {{--@include('events::form.contact')--}}
                            {{--</div>	<a data-parent="#accordion" href="#headingFive" class="btn btn-success continue">Continue</a>--}}
                            {{--<a data-parent="#accordion" href="#headingThree" class="btn btn-danger previous">Previous</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}



                    <step-navigation :steps="steps" :currentstep="currentstep">
                    </step-navigation>

                    <div v-show="currentstep == 1">

            @include('events::form.main-information')
                    </div>

                    <div v-show="currentstep == 2">

            @include('events::form.description-program')
                    </div>

                    <div v-show="currentstep == 3">
                        @include('events::form.date-time')
                    </div>

                    <div v-show="currentstep == 4">
                        @include('events::form.contact')
                    </div>
                    <div v-show="currentstep == 5">
                        @include('events::form.organizers')
                    </div>
                    <div v-show="currentstep == 6">
                        @include('events::form.files')
                    </div>
                    @if($customAvailable)
                        <div v-show="currentstep == 7">
                            @include('events::form.registration-form')
                        </div>
                    @endif
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