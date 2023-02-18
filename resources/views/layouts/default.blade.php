<!doctype html>
<html lang="en">
  <head>
     @include('includes.head')
  </head>

  <body class="home-main header-fixed" data-magic-cursor="show">
     <header class="row">
         @include('includes.header')
     </header>

     @yield('content')

     <footer class="row">
         @include('includes.footer')
     </footer>
  </body>
</html>
