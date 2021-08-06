<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title','nice')</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="/">Something Good</a>
      </div>
    </nav>
    <div class="container">
    @yield('content')
    </div>
  </body>
</html>