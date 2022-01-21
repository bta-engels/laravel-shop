<!DOCTYPE html>
<html>
<head>
    <title> LaravelShop @yield('title') </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ mix('js/app.js') }}"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ mix('css/main.css') }}" />
</head>
<body>

<x-menu />

<div class="content">
    <!-- Page Heading -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            @section('header')
                Unser Header.
            @show
        </div>
    </header>
    <!-- Page Content -->
    <main class="block">
        @yield('content')
    </main>
</div>

</body>
</html>
