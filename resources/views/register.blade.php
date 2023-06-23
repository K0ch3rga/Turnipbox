<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./assets/turnip-color.png" type="image/png">
    <title>Зарегестрироваться</title>
    <link rel="stylesheet" href="{{asset('css/logger.css')}}" type="text/css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> {{-- Rubik is also pretty good--}}
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="Logger">
    <form name="register" method="post" action="/register">
        @csrf
        <h3>Имя</h3>
        <input type="text" name="name" id="name">
        <h3>Почта</h3>
        <input type="mail" name="login" id="login">
        <h3>Пароль</h3>
        <input type="text" name="password" id="password">
        {{-- <h3>Пароль будет вышлен вам на почту</h3> --}}
        <br>
        <input type="submit" value="Зарегестрироваться">
    </form>
    </div>
</body>