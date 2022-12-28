<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <!-- CSS only -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script type="text/javascript" src="{{ URL::asset('js/datepicker.js') }}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet"
        type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tabs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet"> --}}

</head>

<body>
    <ul class="nav  nav-pills justify-content-center mt-4">
        <li class="nav-item">
            <a class="nav-item nav-link active" href="{{ route('members') }}">Članovi</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link bg-info" href="{{ route('attendance-list') }}">Evidencije članova</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link border" href="{{ route('createMember') }}" style="background-color: rgba(201, 63, 63, 0.05);">Kreiraj člana</a>
        </li>
        <li class="nav-item mx-2">
            <a class="nav-link border" href="{{ route('attendance') }}" style="background-color:rgb(95, 152, 226);color:white">Prijava</a>
          </li>
        <li class="nav-item mx-2">
          <a class="nav-link disabled bg-secondary" href="#" tabindex="-1" aria-disabled="true" style="color:white">Admin</a>
        </li>
      </ul>
    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('/images/logo.png') }}" class="logo" />
            </a>
            <div class="container">
                
                </ul>
            </div>
    </div>
    </nav> --}}

    <main class="py-4">
        @yield('content')
    </main>
    </div>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="#">GYM</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>


</html>
