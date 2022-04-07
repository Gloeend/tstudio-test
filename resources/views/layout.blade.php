<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('/css/normalize.css') }}"/>
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}"/>
    </head>
    <body>
        <header class="header">
            <div class="header__content wrap">
                <a href="#" class="header__link">Студенты</a>
                <a href="#" class="header__link">Группы</a>
                <a href="#" class="header__link">Курсы</a>
                <a href="#" class="header__link">Учителя</a>
                <a href="#" class="header__link">Связная таблица</a>
            </div>
        </header>
        <div class="main wrap">
            @yield('content')
        </div>
    </body>
</html>
