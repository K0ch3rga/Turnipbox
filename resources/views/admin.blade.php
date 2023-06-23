@extends('layout')

@section('title')
    
@endsection

@section('content')
<h3>Редактирование описаний товаров</h3>
<a href="/logout">
    <button>Выйти</button>
</a>

<form name="description" method="POST" action="/admin/update">
    {{ csrf_field() }}
    <select name="product" id="product">
    @foreach ($products as $item)
    <option value="{{$item->id}}">
        <div>
            {{$item->id}}
            {{$item->name}}

        </div>
    </option>                
    @endforeach
    </select>

    <input type="text" name="name" id="name" value="{{$item->name}}">
    <input type="text" name="ean" id="ean" value="{{$item->ean}}">
    <input type="text" name="manucfacturer" id="manucfacturer" value="{{$item->manufacturer}}">
    <input type="text" name="massvalue" id="massvalue" value="{{$item->massvalue}}">
    <input type="text" name="masstype" id="masstype" value="{{$item->masstype}}">
    <input type="text" name="type" id="type" value="{{$item->type}}">
    <input type="text" name="tags" id="tags" value="{{$item->tags}}">
    <input type="text" name="edit" id="edit" value="{{$item->edit}}">
    <input type="submit" value="Подтвердить">
</form>

@endsection
