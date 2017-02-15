<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="/assets/css/app.css">
    <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> <!-- 3 KB -->

</head>
<body>
<a href="/" class="logo">
    <img src="/assets/img/logo.png"
         alt="Сквер">
</a>

<nav class="menu">
    <ul>
    @inject('menu', 'App\Services\MainMenuService')
    @foreach($menu->getMenu() as $item)
        <li>
            <a href="{{$item->url}}">{{$item->name}}</a>
        </li>
    @endforeach
        <li>
            <a target="_blank" href="https://www.facebook.com/restaurant.skver/"><i class="fa fa-facebook"></i> </a>
        </li>
        <li>
            <a target="_blank" href="https://www.instagram.com/restaurant.skver/"><i class="fa fa-instagram"></i> </a>
        </li>
    </ul>
</nav>

    @yield('content')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/assets/js/jquery.fullpage.min.js"></script>
<script src="/assets/js/jquery.event.frame.js"></script>
<script src="/assets/js/jquery.parallax.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->
<script src="/assets/js/app.js"></script>

</body>
</html>
