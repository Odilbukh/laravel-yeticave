@extends('templates/layout')

@section('title')Вход@endsection

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
    <form class="form container" action="{{ route('login/log') }}" method="post"> <!-- form--invalid -->
        @csrf
      <h2>Вход</h2>
      <div class="form__item"> <!-- form__item--invalid -->
        <label for="email">E-mail <sup>*</sup></label>
        <input id="email" type="email" name="email" placeholder="Введите e-mail">
        <span class="form__error">Введите e-mail</span>
      </div>
      <div class="form__item form__item--last">
        <label for="password">Пароль <sup>*</sup></label>
        <input id="password" type="password" name="password" placeholder="Введите пароль">
        <span class="form__error">Введите пароль</span>
      </div>
      <button type="submit" class="button">Войти</button>
    </form>
@endsection
