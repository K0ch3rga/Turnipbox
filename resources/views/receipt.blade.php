@extends('layout')

@section('title')Чек@endsection

@section('content')
<h3>Добавить купленные товары</h3>
<ul id="list" class="List">

    <li>
        <form name="receipt" method="POST" action="/receipt">
            <select name="product" id="product">
                @foreach ($products as $item)
                <option value="{{$item->id}}">
                    {{$item->name}}
                </option>                
                @endforeach
            </select>
            
            <input type="number" name="price" id="price">
            <input type="number" name="count" id="count">
            <input type="checkbox" name="sale" id="sale">
            <label for="sale">Со скидкой</label>
        </form>
    </li>

</ul>
<script src="{{ URL::asset('./js/app.js') }}" type="text/javascript"></script>
<button onclick="add()">Добавить строчку</button>
<button onclick="{{URL::route('dump')}}">Подтвердить</button>
@endsection