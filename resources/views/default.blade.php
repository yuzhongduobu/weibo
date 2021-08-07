<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title','nice')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </head>
  <body>
    @include('_header')
    
    @yield('content')
    </div>
  </body>
</html>