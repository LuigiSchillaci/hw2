

<html>
    <head>
      <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='{{ url('css/login.css')}}'>
    @yield('js')
      <title>@yield('title')</title>
   

  </head>

  <body>

              

<div class="container">
<img src="../image/images.jfif">
               <h1>@yield('h1')</h1>
              @yield('form')
      </div>
</div>
  </body>
</html>
