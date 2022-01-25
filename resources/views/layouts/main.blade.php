<!DOCTYPE html>
<html>
<head>
    <title>LaravelShop @yield('title')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ mix('js/app.js') }}"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ mix('css/main.css') }}" />
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
                    Unser Header<br>
                @show
            </h2>
        </div>
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                @auth
                    {{auth()->user()->name}}
                @else
                    public
                @endauth
            </h2>
        </div>

    </header>
    <div class="main_content">

        <!-- Page Content -->
        <main class="block">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

</body>
</html>
