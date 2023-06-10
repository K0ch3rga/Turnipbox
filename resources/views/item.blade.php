@extends('layout')

@section('title')Информация@endsection

@section('content')
    <div>
        {{$product->name}}
    </div>
@endsection