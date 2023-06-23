@extends('layout')

@section('title')Продукты@endsection

@section('content')
    <h1>Все товары</h1>
    <div class="Product List">
    @foreach ($products as $product)
    <div class="Line Product Link">
        <a href="/product/{{$product->id}}">
            <div>
                <h2>{{$product->name}}</h2>
                <p>{{$product->manufacturer}}</p>
                @dump($product->review())
                @foreach ($product->review() as $rev)
                {{-- <p class="stars">{{$rev->stars}}</p>                 --}}
                @endforeach
                
                <p></p>
                <p></p>
            </div>
        </a>
    </div>
    @endforeach    
    </div>
    <br>
@endsection