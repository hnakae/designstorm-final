<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  </head>
  <body>
    <header>
      <div class="container"><a class="logo" href="/">Design Storm</a>
        <nav>
          <a href="/register">register</a>
          <a href="/login">login</a></nav>
      </div>
    </header>
    @yield('content')
  </body>
</html>
