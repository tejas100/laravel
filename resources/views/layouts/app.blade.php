<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet"> --}}

        <title>{{config('app.name','Lsapp')}}</title>

        
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">@yield('content12')</div>
       
        
        </body>
        
</html>
