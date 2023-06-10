<div>
    <form name="register" method="post" action="/register">
        @csrf
        <input type="text" name="name" id="name">
        <input type="mail" name="login" id="login">
        <input type="text" name="password" id="password">
        <input type="submit" value="Зарегестрироваться">
    </form>
</div>