<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Rapido')}}</title>

    <link rel="stylesheet" href="{{mix('css/app.css')}}">

    
  </head>
  <body>
    @include('layouts._nav')
   
    @if (session('ad.create.success'))
        <div class="alert alert-success">{{session('ad.create.success')}}</div>
    @endif

    @yield('content')

   

    
    

    <script src="{{mix('js/app.js')}}"></script>
    <script src="https://kit.fontawesome.com/9dd4195462.js" crossorigin="anonymous"></script>
   
  </body>
</html>