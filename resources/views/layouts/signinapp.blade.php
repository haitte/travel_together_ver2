<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
            <title>{{ config('app.name', 'signin') }}</title>
        <!-- CSRF Token -->
         <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- css file -->
        <link rel="stylesheet" href="css/signin.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->       
        <style>
            
        </style>

    </head>
<body>
    <div id="app">

        @yield('content')
    </div>

            <!-- js file -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
