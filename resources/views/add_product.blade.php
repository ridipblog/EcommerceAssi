<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="csrf" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="" id="add_product_form">
        @csrf
        <input type="text" name="product_name">
        <input type="number" name="product_price">
        <input type="number" name="product_rating">
        <input type="product_color" name="product_color">
        <input type="file" name="product_file">
        <button type="submit">Add</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/add_product.js') }}"></script>
</body>


</html>
