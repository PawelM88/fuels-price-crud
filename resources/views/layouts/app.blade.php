<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Fuels Price</title>
</head>

<body>

    @include('inc.navbar')

    <header>

        @yield('layouts.header')

    </header>

    @yield('content')

    <footer>

        @include('layouts.footer')

    </footer>

</body>

</html>
