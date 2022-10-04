@extends('layouts.app')

@section('title')
@parent Админка
@endsection

@section('menu')
@include('Admin.menu')
@endsection

@section('content')
<div class="container">
<h1>admin panel</h1>
</div>


@endsection

@section('footer')
    2022
@endsection