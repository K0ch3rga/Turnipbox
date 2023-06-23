<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./assets/turnip-color.png" type="image/png">
    <title>Войти</title>
    <link rel="stylesheet" href="{{asset('css/logger.css')}}" type="text/css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> {{-- Rubik is also pretty good--}}
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="Logger">
        <form name="login" method="post" action="">
            @csrf
            <h3>Логин</h3>
            <input type="text" name="email" id="email">
            <h3>Пароль</h3>
            <input type="text" name="password" id="password">
            <button type="submit">Войти</button>
            
        </form>
        @if ($errors->any())
        <div class="Error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>        
        @endif
        <a href="/register">
            <button>Зарегистрироваться</button>
        </a>
    </div>
</body>