<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <div id="app" >
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" >
            <div class="container" >
                <a class="navbar navbar-light" style="background-color: #e3f2fd;" href="{{ url('/') }}">
                    Strona główna
                </a>
                <li class="navbar navbar-light dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dodaj</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('/add') }}">osobę</a>
                    </div>
                </li>
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                </ul>
            </div>
        </nav>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" >
                        <img class="d-block w-100" src="{{ asset('img/pb-beer-1513436-1600.jpg') }}" alt="Fallwork - Agencja pracy">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/pb-beer-1513436-16002.jpg') }}" alt="Fallwork - Agencja pracy">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/pb-beer-1513436-16003.jpg') }}" alt="Fallwork - Agencja pracy">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/pb-beer-1513436-16004.jpg') }}" alt="Fallwork - Agencja pracy">
                    </div>
                </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
            </div>
       
            <div class="container">     
                @yield('content')
            </div>
            <br /><br /><br /><br />

            <!-- Footer -->
            <footer class="page-footer font-small fixed-bottom">
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="#">Stanny.com</a>
                </div>
            <!-- Copyright -->
            </footer>
            <!-- Footer -->
    </div>    
</body>
</html>

