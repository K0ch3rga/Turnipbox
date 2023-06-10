@extends('layout')

@section('title')Чек@endsection

@section('content')
<h3>Добавить купленные товары</h3>
<ul>
    <form name="receipt" method="POST" action="/receipt">
        <select name="product" id="product">
            @foreach ($products as $item)
            <option value="{{$item->id}}">
                {{$item->name}}
            </option>                
            @endforeach
        </select>

        <input type="number" name="price" id="price">
        <input type="checkbox" name="sale" id="sale">
        <label for="sale">Со скидкой</label>
    </form>

</ul>
<button>Добавить строчку</button>
<button>Подтвердить</button>
@endsection