@extends('layouts.app')

@section('title')
@parent Авторизация
@endsection

@section('menu')
@include('menu')
@endsection

@section('content')

<h1>Авторизация</h1>
    <form action="#">
        <label for="login">логин:</label>
        <input type="text" id="login"><br>
        <label for="password">пароль:</label>
        <input type="text" id="password"><br>
        <input type="submit" value="Авторизация">
    </form>

@endsection
