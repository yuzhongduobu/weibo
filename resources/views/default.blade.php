<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title','nice')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="javascript" href="../js/home.js">
  </head>
  <body>
    @include('_header')
    <div class="container">
    @yield('content')
    </div>
  </body>
</html>