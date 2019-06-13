<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('eventmanager.title') }}</title>
    <link rel="stylesheet" href="{{ asset('vendor/Valeviy/EventManager/css/app.css') }}">
</head>
<body>
<div class="wrapper">
    <nav id="sidebar" class="active">

        <div class="sidebar-header" id="sidebarCollapse">
            <h3>{{ config('eventmanager.title') }}</h3>
            <strong>{{ config('eventmanager.strong-title') }}</strong>
        </div>

        <ul class="list-unstyled components">
            @guest
                <li><a href="/events">
                        <i class="fas fa-calendar-alt"></i>
                        {!! trans('eventmanager.all_events') !!}
                    </a></li>
                <li>
            @else
                <li><a href="/events">
                        <i class="fas fa-calendar-alt"></i>
                        {!! trans('eventmanager.all_events') !!}
                    </a></li>

                <li><a href="/event">
                        <i class="fas fa-calendar-plus"></i>
                        {!! trans('eventmanager.create_event') !!}
                    </a></li>

                @role('moderate')
                <li><a href="/moderate">
                        <i class="fas fa-calendar-check"></i>
                        {!! trans('eventmanager.event_moderate') !!}
                    </a></li>
                @endrole

                @role('admin')
                <li><a href="/admin">
                        <i class="fas fa-calendar"></i>
                        {!! trans('eventmanager.event_administration') !!}
                    </a></li>
                @endrole

            @endif
        </ul>
    </nav>

    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                            @guest
                                <li class="nav-item"><a
                                            class="nav-link {{ \Illuminate\Support\Facades\Request::is('login') ? 'active' : null }}"
                                            href="{{ route('login') }}"><span class="icon-login"></span> {!! trans('eventmanager.login') !!}</a></li>
                                <li class="nav-item"><a
                                            class="nav-link {{ \Illuminate\Support\Facades\Request::is('register') ? 'active' : null }}"
                                            href="{{ route('register') }}"><span class="icon-user"></span>
                                        {!! trans('eventmanager.registration') !!}</a></li>
                            @else
                                <li>
                                    <p class="mt-2 mr-5">{{Auth::user()->name}}</p>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-outline-info " href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                        Выход
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </a>
                                </li>
                                @endif
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <section>
            <div id="app">
                @section('content')

                @show
            </div>
        </section>
        <footer class="mt-5 mb-3 text-center">
            <p>{{ config('eventmanager.title') }}</p>
        </footer>
    </div>

    <div class="overlay"></div>
</div>

<script type="text/javascript" src="{{ asset("vendor/Valeviy/EventManager/js/app.js") }}"></script>
</body>
</html>


