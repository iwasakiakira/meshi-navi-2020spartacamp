<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>めしナビ - {{-- ビュー毎に異なる部分→ --}}@yield('title')</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            {{-- ビュー毎に異なる部分 --}}
            @yield('content')
        </div>
    </body>
</html>