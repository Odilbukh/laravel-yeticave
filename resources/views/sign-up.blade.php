@extends('templates/layout')
@section('title')Регистрация@endsection

@section('main')
    <nav class="nav">
      <ul class="nav__list container">
        <li class="nav__item">
          <a href="{{ route('all-lots') }}">Доски и лыжи</a>
        </li>
        <li class="nav__item">
          <a href="{{ route('all-lots') }}">Крепления</a>
        </li>
        <li class="nav__item">
          <a href="{{ route('all-lots') }}">Ботинки</a>
        </li>
        <li class="nav__item">
          <a href="{{ route('all-lots') }}">Одежда</a>
        </li>
        <li class="nav__item">
          <a href="{{ route('all-lots') }}">Инструменты</a>
        </li>
        <li class="nav__item">
          <a href="{{ route('all-lots') }}">Разное</a>
        </li>
      </ul>
    </nav>
    @include('templates.error')
    <form class="form container form--invalid" action="{{ route('register') }}" method="post" autocomplete="off">
        @csrf
        <!-- form--invalid -->
      <h2>Регистрация нового аккаунта</h2>
      <div class="form__item"> <!-- form__item--invalid -->
        <label for="email">E-mail <sup>*</sup></label>
        <input id="email" type="email" name="email" placeholder="Введите e-mail">
        <span class="form__error">Введите e-mail</span>
      </div>
      <div class="form__item">
        <label for="password">Пароль <sup>*</sup></label>
        <input id="password" type="password" name="password" placeholder="Введите пароль">
        <span class="form__error">Введите пароль</span>
      </div>
      <div class="form__item">
        <label for="name">Имя <sup>*</sup></label>
        <input id="name" type="text" name="name" placeholder="Введите имя">
        <span class="form__error">Введите имя</span>
      </div>
      <div class="form__item">
        <label for="message">Контактные данные <sup>*</sup></label>
        <textarea id="message" name="message" placeholder="Напишите как с вами связаться"></textarea>
        <span class="form__error">Напишите как с вами связаться</span>
      </div>
      <span class="form__error form__error--bottom">Пожалуйста, исправьте ошибки в форме.</span>
      <button type="submit" class="button">Зарегистрироваться</button>
      <a class="text-link" href="{{ route('login') }}">Уже есть аккаунт</a>
    </form>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
