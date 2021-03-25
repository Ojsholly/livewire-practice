<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title') | {{ env('APP_NAME') }}</title>
    <style>
        body {
            font-family: nunito;
        }
    </style>

    @livewireStyles
</head>

<body>
    @include('layouts.partials.sidebar')

    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.header')

    @livewireScripts
</body>

</html>
