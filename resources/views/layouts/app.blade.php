<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="no-store" http-equiv="Cache-Control" />
        <meta content="no-cache" http-equiv="Cache-Control" />
        <meta content="must-revalidate" http-equiv="Cache-Control" />
        <title>Test work</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
        @stack('styles')        
    </head>
    <body data-token="{{ Session::token() }}">
        @yield('content')
    </body>
</html>
