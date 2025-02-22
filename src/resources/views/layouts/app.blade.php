<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Inika&display=swap" rel="stylesheet">
    @yield('css')
</head>
<body>
    @if (!isset($hideHeader)) 
    <header class="header">
        <a href="/" class="header__logo">
            FashionablyLate
        </a>
        @yield('btn')
    </header>
    @endif
    <main>
        @yield('content')
    </main>
</body>
</html>