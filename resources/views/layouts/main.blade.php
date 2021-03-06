<!DOCTYPE html>
<html>
<head>
    <title>LaravelShop @yield('title')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <script src="{{ mix('js/app.js') }}?t={{ time() }}"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}?t={{ time() }}" />
    <link type="text/css" rel="stylesheet" href="{{ mix('css/main.css') }}?t={{ time() }}" />
</head>
<body>

@auth
    <x-admin-menu />
@else
    <x-menu />
@endauth
<div class="content">
<!-- Page Heading -->


    <header >
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                @section('header')

                @show
            </h2>
        </div>
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                @auth
                    {{ auth()->user()->name }} <a href="{{ route('my-logout') }}">Logout</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                @endauth
                <span class="lang">
                    <a class="@if('de' === app()->getLocale()) active @endif" href="{{ route('lang.switch', 'de') }}">DE</a>
                    <a class="@if('en' === app()->getLocale()) active @endif" href="{{ route('lang.switch', 'en') }}">EN</a>
                    <a class="@if('fr' === app()->getLocale()) active @endif" href="{{ route('lang.switch', 'fr') }}">FR</a>
                </span>
            </h2>
        </div>

    </header>
    <div class="main_content">
        <div class="links">
            @yield('links')
        </div>

        <!-- Page Content -->

        <div class="main">
            @yield('content')
        </div>
    </div>
</div>

</body>
</html>
