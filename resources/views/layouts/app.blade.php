<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">




    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/plugins/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="/plugins/datatable/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link href="/plugins/sweetalert2/sweetalert2.min.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-dark bg-primary navbar-expand-lg">
        <a class="navbar-brand" href="/">Yuuk Tech</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <!-- <span class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a> -->
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="/logic">Logic</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="/student">Resume</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout</a>
                </li>

            </ul>
        </div>
    </nav>

    <div class="container">

        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    @yield('content')
                </div>

            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="/plugins/jquery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script type="text/javascript" src="/plugins/validator/validator.min.js"></script>
    <script type="text/javascript" src="/plugins/popper/popper.min.js"></script>
    <script type="text/javascript" src="/plugins/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="/plugins/datatable/datatables.min.js"></script>
    <script type="text/javascript" src="/plugins/datatable/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>

    <!-- <script src="js/script.js"></script> -->
    @stack('scripts')
</body>

</html>