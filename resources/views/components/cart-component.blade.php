<div class="flexDiv main_cart">
    <div class="flexDiv main_cart_div">
        <h1 class="flexDiv main_cart_head"><span><i class="fa-solid fa-cart-shopping"></i> My Cart</span><span
                id="close_cart"><i class="fas fa-window-close"></i></span></h1>
        <div class="flexDiv main_cart_info">
            <img src="{{ asset('images/product_1.png') }}" alt="" id="product_image">
            <div class="flexDiv cart_info_div">
                <p id="product_name">Palin Shirt & Shoes </p>
                <p id="product_color">color:Black</p>
                <p id="product_size">Size: S</p>
            </div>
            <div class="flexDiv cart_info_div_1">
                <p>Quantity</p>
                <input type="number" placeholder="Enter Quantity" id="quantity" value="">
                <p>Select Size</p>
                <select name="" id="change_size">
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                </select>
            </div>
        </div>
        <div class="flexDiv cart_submit">
            <p>ENTER PROMD CODE</p>
            <div class="flexDiv cart_submit_input">
                <input type="text" placeholder="PIN CODE">
                <button>SUBMIT</button>
            </div>
            <div class="flexDiv cart_price">
                <p>Shopping Cost</p>
                <p id="product_cost">$200</p>
            </div>
            <div class="flexDiv cart_price">
                <p>Discount</p>
                <p id="discount">$0</p>
            </div>
            <div class="flexDiv cart_price">
                <p>Total Cost</p>
                <p id="total_cost">$220</p>
            </div>
            <div class="flexDiv cart_price">
                <button id="cart_product">Add Cart</button>
                <button id="buy_product">Buy Product</button>
            </div>
        </div>
    </div>
</div>
