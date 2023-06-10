@extends('layout')

@section('title')Продукты@endsection

@section('content')
    <h2>Все товары</h2>
    @foreach ($products as $product)
    <a href="/product/{{$product->id}}">
        <div>
            <h2>{{$product->name}}</h2>
        </div>
    </a>
    @endforeach    
@endsection