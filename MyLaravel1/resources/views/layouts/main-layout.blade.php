<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GRAND HOTEL BERNARD'S</title>
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    {{-- favicon --}}
    <link rel="shortcut icon" sizes="114x114" href="{{ asset('/storage/assets/boolean-hotel.png') }}">
</head>

<body>
    <div id="container">
        @include('components.header')
        @yield('content')
        @include('components.footer')
    </div>
</body>

</html>