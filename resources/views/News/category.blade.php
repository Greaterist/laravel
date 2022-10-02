@extends('layouts.app')

@section('title')
@parent Категории
@endsection

@section('menu')
@include('menu')
@endsection

@section('content')

<h1>NEWS</h1>
    @foreach ($news as $item)
        <a href="{{route('news.one', $item['id'])}}">{{$item['title']}}</a><br>
    @endforeach

@endsection

@section('footer')
    2022
@endsection