@extends('layouts.app')

@section('title')
@parent Категории
@endsection

@section('menu')
@include('menu')
@endsection

@section('content')

<h1>CATEGORIES</h1>
    @foreach ($categories as $item)
        <a href="{{route('news.category', $item['id'])}}">{{$item['title']}}</a><br>
    @endforeach
@endsection

@section('footer')
    2022
@endsection