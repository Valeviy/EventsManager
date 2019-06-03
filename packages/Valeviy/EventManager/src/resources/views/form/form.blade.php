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

        <form method="POST" action="" @submit.prevent="onSubmit">
            {{ csrf_field() }}

                @include('events::form.main-information')

                @include('events::form.description-program')

                @include('events::form.date-time')

                @include('events::form.contact')

                @include('events::form.organizers')

                @include('events::form.files')

                @if($customAvailable)

                    @include('events::form.registration-form')

                @endif
                <div class="row">
                    <div class="col-md-12 text-left">
                        <button class="btn btn-primary btn-lg btn-block mt-5">{{trans('eventmanager.submit')}}</button>
                </div>
                </div>

        </form>
    </div>

@endsection









