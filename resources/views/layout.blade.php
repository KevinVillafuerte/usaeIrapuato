<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>@yield('titulo')</title>
        <link href="{{ asset('css/layout.css') }}" rel="stylesheet" >      
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="/img/Imagen15.png" type="image/x.icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">

    

<!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">


        @yield('css')
    @yield('script')
    </head>
    <body>
    @yield('content')


    
    </body>
    
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    @yield('js')
 
</html>