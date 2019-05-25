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
            <li><a href="#" class="active">
                    <i class="fas fa-briefcase"></i>
                    Create event
                </a></li>
            <li>

        </ul>
    </nav>

    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                </div>
            </div>
        </nav>
        <section >
            @section('content')

            @show
        </section>
    </div>
    <div class="overlay"></div>
</div>

<script type="text/javascript" src="{{ asset("vendor/Valeviy/EventManager/js/app.js") }}"></script>
</body>
</html>


