@extends('layout')

@section('title')Информация@endsection

@section('content')
    <div>
        {{-- @dd($product) --}}
        {{$product->name}}
        {{$product->manufacturer}}
        <br>
        @foreach ($product->review as $rev)
        <p>{{$rev->text}}</p>
        <p>{{$rev->stars}}</p>
        <p>{{$rev->name}}</p>
        <br>
        @endforeach
    </div>
@endsection