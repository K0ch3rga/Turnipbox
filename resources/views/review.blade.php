@extends('layout')

@section('title')Отзывы@endsection

@section('content')

<h1>Добавить отзыв</h1>

<form name="review" method="POST" action="/review">
    @csrf
    <select name="product" id="product">
        @foreach ($products as $item)
        <option value="{{$item->id}}">
            {{$item->name}}
        </option>                
        @endforeach
    </select>

    <input type="text" id="text" name="text"><br>

    <div class="stars">
        <input type="radio" name="stars" id="1star" value="5">
        <label for="1star" title="1 star">1star</label>
        <input type="radio" name="stars" id="2star" value="4">
        <label for="2star" title="2 stars">1star</label>
        <input type="radio" name="stars" id="3star" value="3">
        <label for="3star" title="3 stars">1star</label>
        <input type="radio" name="stars" id="4star" value="2">
        <label for="4star" title="4 stars">1star</label>
        <input type="radio" name="stars" id="5star" value="1">
        <label for="5star" title="5 stars">1star</label>
    </div>

    <input type="text" id="name" name="name">

    @if ($errors->any())
    <div class="Error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>        
    @endif

    <input type="submit" value="Добавить">
</form>


@endsection