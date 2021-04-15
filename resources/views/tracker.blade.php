<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <title>Tracker: @yield('testy title')</title>
</head>
<body>
    <div class="mybox">Hello there, you're on page {{$pageNumer ?? 'base page'}}</div>
    <div>{{env('APP_DEBUG', 'default if not found')}}</div>

    @yield('contents')
    
</body>
</html>