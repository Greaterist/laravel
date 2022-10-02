@extends('layouts.app')

@section('title')
@parent Новости
@endsection

@section('menu')
@include('menu')
@endsection

@section('content')

<h1>NEWS</h1>
@forelse($news as $item)
    <a href="{{route('news.one', $item['id'])}}">{{$item['title']}}</a><br>
@empty
    <p>Нет новостей</p>
@endforelse

@endsection