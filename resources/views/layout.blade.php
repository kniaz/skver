<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="stylesheet"
          href="/assets/css/app.css">

</head>
<body>
<a href="/" class="logo">
    <img src="/assets/img/logo.png"
         alt="Сквер">
</a>

    @yield('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/assets/js/jquery.fullpage.min.js"></script>
<script src="/assets/js/app.js"></script>
</body>
</html>
