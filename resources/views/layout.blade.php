<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Simple Flashcards</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/style.css">
        <script type="text/javascript" src="/js/jquery-3.1.1.js"></script>

        @yield('head')
    </head>
    <body>
        <div class="nav">
            @yield('nav')
        </div>
        <div class="content">
            @yield('content')
        </div>
        <div class="footer">
            @yield('footer')
        </div>
    </body>
</html>
