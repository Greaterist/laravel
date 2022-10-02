@extends('layouts.app')

@section('title')
@parent Добавить новость
@endsection

@section('menu')
@include('menu')
@endsection

@section('content')

<h1>Добавить новость</h1>
    <form action="#">
        <label for="title">заголовок:</label>
        <input type="text" id="title"><br>
        <label for="shortText">краткое содержание:</label>
        <input type="text" id="shortText"><br>
        <label for="longText">полное содержание:</label>
        <input type="text" id="longText"><br>
        <input type="submit" value="Добавить новость">
    </form>

@endsection
