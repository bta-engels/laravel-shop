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

<x-menu />

<div class="content">

        <div class="right">
            <form class="kontakt_form" action="" method="post">
                <h2>Create a new product</h2>
                <input type="text" name="name" id="" class="field" placeholder="Product Name">
                <label >Kategorie</label>
                <select name="category_id">
                    <option value="">Bitte wählen</option>
                    <option value="">cat1</option>
                    <option value="">cat2</option>
                </select>
                <label >Manufacturer</label>
                <select name="manufacturer_id">
                    <option value="">Bitte wählen</option>
                    <option value="">man1</option>
                    <option value="">man2</option>
                </select>

                <textarea name="message" id="" cols="30" rows="10" class="field area" placeholder="Description"></textarea>
                <button class="btn">Store</button>
            </form>
        </div>


</div>

</body>
</html>