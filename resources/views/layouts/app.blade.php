<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">{{ config('app.name', 'Laravel') }}</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="{{ route('index') }}">First</a>
            <a class="p-2 text-dark" href="{{ route('bids') }}">Second</a>
            <a class="p-2 text-dark" href="{{ route('orders-no-exist') }}">Third</a>
            <a class="p-2 text-dark" href="{{ route('order-more') }}">Fourth</a>
            <a class="p-2 text-dark" href="{{ route('order-most') }}">Fifth</a>
            <a class="p-2 text-dark" href="{{ route('algorithm') }}">Algorithm</a>
        </nav>
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
