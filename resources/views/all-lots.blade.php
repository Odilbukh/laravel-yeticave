@extends('templates/layout')
@section('title')Все лоты@endsection

@section('main')
    <nav class="nav">
      <ul class="nav__list container">
        <li class="nav__item nav__item--current">
          <a href="all-lots.blade.php">Все лоты</a>
        </li>
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
    <div class="container">
        @include('templates.error')
      <section class="lots">
        <h2>Все лоты в категории <span>«Доски и лыжи»</span></h2>
        <ul class="lots__list">
            @foreach($lots as $lot)
                <li class="lots__item lot">
                    <div class="lot__image">
                        <img src="{{$lot->link}}" width="350" height="260" alt="{{$lot->category_id}}">
                    </div>
                    <div class="lot__info">
                        <span class="lot__category">{{$lot->category_id}}</span>
                        <h3 class="lot__title"><a class="text-link" href="{{ route('lot', $lot->id) }}">{{$lot->name}}</a></h3>
                        <div class="lot__state">
                            <div class="lot__rate">
                                <span class="lot__amount">Стартовая цена</span>
                                <span class="lot__cost">{{$lot->start_coast}}<b class="rub">р</b></span>
                            </div>
                            <div class="lot__timer timer">
                                16:54:12
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
      </section>
      <ul class="pagination-list">
        <li class="pagination-item pagination-item-prev"><a>Назад</a></li>
        <li class="pagination-item pagination-item-active"><a>1</a></li>
        <li class="pagination-item"><a href="#">2</a></li>
        <li class="pagination-item"><a href="#">3</a></li>
        <li class="pagination-item"><a href="#">4</a></li>
        <li class="pagination-item pagination-item-next"><a href="#">Вперед</a></li>
      </ul>
    </div>
@endsection
