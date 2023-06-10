<div>
    <form name="login" method="post" action="">
        @csrf
        <input type="text" name="email" id="email">
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