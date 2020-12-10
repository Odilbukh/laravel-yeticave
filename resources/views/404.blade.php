@extends('templates/layout')
@section('title')
    Yeticave
@endsection

@section('main')
    @include('templates.navigation')
        <section class="lot-item container">
            <h2>404 Страница не найдена</h2>
            <p>Данной страницы не существует на сайте.</p>
        </section>
@endsection
