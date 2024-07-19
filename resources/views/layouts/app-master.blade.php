<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacion de index</title>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('assets2/css/Style.css')}}">
    <link rel="icon" href="{{ url('assets2/img/calavera-mexicana.png')}}">
</head>
<body>
    @include('layouts.partials.navbar')


    @yield('content')
        

    <script src="{{ url('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>