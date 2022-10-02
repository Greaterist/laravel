@extends('layouts.app')

@section('title')
@parent Главная
@endsection

@section('menu')
@include('menu')
@endsection

@section('content')

@if ($news)
    @if (!$news['isPrivate'])
    <H1>{{$news['title']}}</H1>
    <p>{{$news['text']}}</p>
    @endif
@else
<p> нет такой новости</p>
@endif

@endsection