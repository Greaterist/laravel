@extends('layouts.app')

@section('title')
@parent Категории
@endsection

@section('menu')
@include('menu')
@endsection

@section('content')
<div class="container">
<h1>CATEGORIES</h1>
    @foreach ($categories as $item)
        <a href="{{route('news.category', $item->id)}}">{{$item->title}}</a><br>
    @endforeach
</div>

@endsection

@section('footer')
    2022
@endsection