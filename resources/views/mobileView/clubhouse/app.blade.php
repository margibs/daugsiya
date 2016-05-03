<!DOCTYPE html>
<html>
  <head>
    <title>My App</title>
    <meta name="viewport" content="width=device-width,
                                   initial-scale=1.0,
                                   maximum-scale=1.0,
                                   user-scalable=no,
                                   minimal-ui">
    <link rel="stylesheet" href="{{ asset('css/mobile-app.css') }}">
      
      

  </head>
  <body>
    @yield('content-list')
    <!-- put your pages here -->
    <script src="{{ asset('js/mobile-zepto.js') }}"></script>
    <script src="{{ asset('js/mobile-app.js') }}"></script>
    @yield('script')
  
  </body>
</html>