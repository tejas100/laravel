<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <title>{{config('app.name','Lsapp')}}</title>
       
        
    </head>
    <body>
        @include('inc.navbar')
       
        
        <div class=""></div>


        <div class="wrapper ">
                <!-- Left side column. contains the logo and sidebar -->
                <aside class="left-side ">
                    <section class="sidebar ">
                        <div class="page-sidebar  sidebar-nav">
                           
                            <div class="clearfix"></div>
                            <!-- BEGIN SIDEBAR MENU -->
                            @include('inc.sidebar')
                            <!-- END SIDEBAR MENU -->
                        </div>
                    </section>
                </aside>
                <aside class="right-side">
            
                   
            
                            <!-- Content -->
                            @yield('content12')
            
                </aside>
                <!-- right-side -->
            </div>
        
       
        
        </body>
        
</html>
