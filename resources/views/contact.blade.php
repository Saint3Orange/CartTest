@extends('layouts.app')

@section('title-block') Страница контактов@endsection

@section('content')
    <h1>Страница контактов</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/contact/ru/send" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Введите ФИО</label>
            <input type="text" name="name" placeholder="Введите ФИО" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="phone">Город</label>
            <input type="text" name="city" placeholder="Город" id="city" class="form-control">
        </div>

        <div class="form-group">
            <label for="phone">Название организации</label>
            <input type="text" name="namecom" placeholder="Название организации" id="namecom" class="form-control">
        </div>

        <div class="form-group">
            <label for="phone">Должность</label>
            <input type="text" name="position" placeholder="Должность" id="position" class="form-control">
        </div>

        <div class="form-group">
            <label for="phone">Введите номер телефона</label>
            <input type="text" name="phone" placeholder="Введите номер телефона" id="phone" class="form-control">
        </div>

        <div class="form-group">
            <label for="phone">Введите Email-адрес</label>
            <input type="text" name="email" placeholder="Введите Email-адрес" id="email" class="form-control">
        </div>


        <button type="submit" class="btn btn-success">Отправить форму</button>

    </form>
@endsection
