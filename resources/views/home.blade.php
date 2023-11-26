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
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('css/notify.css') }}">
    <style>
        * {
            padding: 0;
            margin: 0;
        }
    </style>
</head>

<body>

    {{-- Header Component --}}

    <x-header-component></x-header-component>

    {{-- Navbar Component --}}
    @php
    $count=[$count_order,$count_cart];
    @endphp
    <x-nav-component :count=$count>

    </x-nav-component>

    {{-- Show Content Component --}}

    <x-show-content-component></x-show-content-component>
    {{-- Service Component --}}

    <x-server-component></x-server-component>

    {{-- Buy Product --}}

    <x-buy-product-component :products=$products>

    </x-buy-product-component>

    {{-- Cart Component --}}

    <x-cart-component></x-cart-component>

    {{-- Notify Component --}}
    <x-notify-component></x-notify-component>

    {{-- Cart Component --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://kit.fontawesome.com/42bb61fedf.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/home.js') }}"></script>
    {{-- <script src="{{ asset('js/notify.min.js') }}"></script> --}}
</body>

</html>
