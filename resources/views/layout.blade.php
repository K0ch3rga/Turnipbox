<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./assets/turnip-color.png" type="image/png">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}" type="text/css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> {{-- Rubik is also pretty good--}}
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="Sidenav">
        <nav>
            <a href=""><img src="" alt=""></a>
            <a href="product">Товары</a>
            <a href="review">Добавить обзор</a>
            <a href="receipt">Добавить чек</a>
        </nav>
        <div class="Bottomnav">
            <a href="/">О проекте</a>
            <a href="/admin">Админам</a>
        </div>
    </div>
    <div class="Content">
    @yield('content')
    </div>
</body>
</html>