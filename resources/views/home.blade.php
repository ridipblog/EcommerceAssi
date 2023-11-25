<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset(asset('css/class.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/show_content.css') }}">
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
    <link rel="stylesheet" href="{{ asset('css/buy_product.css') }}">
    <style>
        * {
            padding: 0;
            margin: 0;
        }
    </style>
</head>

<body>
    {{-- Header Component  --}}

    <x-header-component></x-header-component>

    {{-- Navbar Component  --}}

    <x-nav-component></x-nav-component>

    {{-- Show Content Component --}}

    <x-show-content-component></x-show-content-component>
    {{-- Service Component  --}}

    <x-server-component></x-server-component>

    {{-- Buy Product --}}

    <x-buy-product-component></x-buy-product-component>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://kit.fontawesome.com/42bb61fedf.js" crossorigin="anonymous"></script>

</body>

</html>
