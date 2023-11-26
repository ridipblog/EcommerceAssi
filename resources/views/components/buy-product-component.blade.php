<div class="flexDiv main_product">
    <h1>NEWEST PRODUCT</h1>
    <div class="flexDiv main_product_div">
        @foreach ($products as $product)
        <div class="flexDiv product_div">
            <img src="{{ $product->product_image }}" class="pro_img" alt="">
            <p class="product_para">{{ $product->product_name }}</p>
            <p class="product_para">${{ $product->product_price }}.00</p>
            <p class="product_para">Product Rating: {{ $product->product_rating }}</p>
            <div class="flexDiv main_buy_div">
                <button class="cart_btn" value="{{ $product->id }}"><i class="fa-solid fa-cart-shopping"></i></button>
                <button class="my_cart_btn" value="{{ $product->id }}"><i class="fa-solid fa-heart"></i></button>
                <button><i class="fa-solid fa-right-left"></i></button>
                <button><i class="fas fa-search"></i></button>
            </div>
        </div>
        @endforeach

    </div>
</div>
