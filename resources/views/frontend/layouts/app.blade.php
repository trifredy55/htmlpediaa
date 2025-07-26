<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- favicon-->
    <link rel="shortcut icon" href="{{ asset('frontend/favicon.svg') }}" type="image/svg+xml">

    <title>@yield('title', 'Home')</title>
    @include('frontend.partials.styles')
</head>

<body>
    <!--- #HEADER-->
    <header class="header" data-header>
        @include('frontend.partials.navbar')
    </header>
    @yield('content')
     <!--- #BACK TO TOP-->
     <a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
        <ion-icon name="arrow-up"></ion-icon>
    </a>
    <!--#FOOTER-->
    <footer class="footer">
        @include('frontend.partials.footer')
    </footer>
    @include('frontend.partials.scripts')
</body>

</html>
