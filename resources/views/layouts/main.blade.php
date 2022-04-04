<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer ></script>
    @yield('script')
    <title>COMIC~STORE</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">COMIC - STORE</a>
            </div>
            <div class="container-fluid">
              <a class="navbar-brand" href="{{ route('comics.index') }}">
               Comcis
            </a>
            </div>
          </nav>
    </header>
    @yield('content')
    
</body>
</html>