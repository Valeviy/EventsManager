<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <title></title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('vendor/Valeviy/EventManager/css/app.css') }}">

</head>
<body>
<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar" class="active">
        <div class="sidebar-header" id="sidebarCollapse">
            <h3>EventManager</h3>
            <strong>EV</strong>
        </div>

        <ul class="list-unstyled components">
            <li><a href="#" class="active">
                    <i class="fas fa-briefcase"></i>
                    Create event
                </a></li>
            <li>

        </ul>
    </nav>

    <!-- Page Content  -->
    <div id="content">
        {{--<nav class="navbar navbar-expand-lg navbar-light bg-light">--}}
            {{--<div class="container-fluid">--}}
                {{--<button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
                    {{--<i class="fas fa-align-justify"></i>--}}
                {{--</button>--}}

                {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}
        <section >
            @section('content')

            @show
        </section>
    </div>
</div>

<script type="text/javascript" src="{{ asset("vendor/Valeviy/EventManager/js/app.js") }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
</body>
</html>


