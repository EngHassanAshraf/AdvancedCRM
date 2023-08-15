<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Crm</title>
    <link rel="stylesheet" href="{{ asset("css/all.css") }}">
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/main.css") }}">



</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container">


                <a class="navbar-brand" href="#">
                    <h2>Empolyee CRM</h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-5">
                    <li class="nav-item active">
                    <a class="nav-link" href="/">Add Employee</a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="/showdata">Show Employees</a>
                    </li>

                </ul>

                </div>

        </div>
    </nav>

    @yield('content')


    <script src="{{ asset("js/jquery-3.6.0.min.js") }}"></script>
    <script src="{{ asset("js/popper.min.js") }}"></script>
    <script src="{{ asset("js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("js/main.js") }}"></script>
</body>
</html>

