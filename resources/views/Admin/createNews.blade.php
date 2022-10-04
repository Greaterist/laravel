@extends('layouts.app')

@section('title')
@parent Админка
@endsection

@section('menu')
@include('Admin.menu')
@endsection

@section('content')
<div class="container">
    <div class="card">
        <form action="{{ route('admin.createNews')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">заголовок:</label>
                <input type="text" id="title" name="title" class="form-control" value="{{old('title')}}"><br>
            </div>
            <div class="form-group">
                <label for="shortText">Категория новости:</label>
                <select name="category_id" id="newsCategory" class="form-control">
                    @forelse($categories as $item)
                    <option @if($item['id']==old('category')) selected @endif value="{{$item['id']}}">{{$item['title']}}</option>
                    @empty
                    <option value="null">Нет категорий</option>
                    @endforelse
                </select>
            </div>
            <div class="form-group">
                <label for="longText">полное содержание:</label>
                <input type="text" name="text" id="longText" class="form-control" value="{{old('text')}}"><br>
            </div>
            <div class="form-check">
                <input @if (old('isPrivate')===true ) checked @endif id="newsPrivate" name="isPrivate" type="checkbox" value="1" class="form-check-input">
                <label for="newsPrivate">Приватная</label>
            </div>
            <input type="submit" value="Добавить новость">
        </form>
    </div>
</div>



@endsection

@section('footer')
2022
@endsection