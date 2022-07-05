<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

@yield('script')


<title>Phone Mania</title>
</head>
<body>

    <nav>
        <img src="../image/images.jfif">
      @yield('ricerca')
         <div id="menu">
         <a href="/principale">Home</a>
        <a href="/logout">Esci</a>
        <a href="/profilo">Profilo</a>
        </div>
    </nav>

<header>
<h1>Cerca il tuo telefono e aggiungilo tra i preferiti</h1>
</header>

    
@yield('telefono')

@yield('cambio')

    <footer>
    Luigi Schillaci 1000001824
    </footer>
</body>
</html>
