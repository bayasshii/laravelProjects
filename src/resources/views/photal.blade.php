<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/hoge.css') }}">
        <title>Photal</title>
        <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    </head>
    <body>
        <!-- 投稿表示 -->
        <div id="app">
            <router-view></router-view>
        </div>

        <script src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>