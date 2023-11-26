$(document).ready(function () {
    var count = 1;
    changeSlider(count);

    // Display Specific Product
    $(document).on('click', '.cart_btn', async function () {
        var product_id = $(this).val();
        var pre_html = $(this).html();
        $(this).html('<i class="fas fa-hourglass"></i>');
        await $.ajax({
            type: "get",
            url: "/open_cart",
            data: {
                product_id: product_id
            },
            success: function (result) {
                if (result.status == 200) {
                    $('#product_name').html(result.message[0].product_name);
                    $('#product_color').html(result.message[0].product_color);
                    $('#product_cost').html('$' + result.message[0].product_price);
                    $('#total_cost').html('$' + result.message[0].product_price);
                    $('#product_image').attr('src', result.message[0].product_image);
                    $('#buy_product').val(result.message[0].id);
                    $('#cart_product').val(result.message[0].id);
                    $('.main_cart').eq(0).css("display", "flex");
                } else {
                    console.log(result.message);
                }
            }, error: function (data) {
                console.log(data);
            }
        });
        $(this).html(pre_html);
    });

    // Change Product Size
    $('#change_size').on('change', function () {
        var size = $(this).val();
        $('#product_size').html(size);
    });
    // Close Cart Menu

    $('#close_cart').on('click', function () {
        $('.main_cart').eq(0).css("display", "none");
    });

    // Make A Order
    $('#buy_product').on('click', async function () {
        var product_id = $(this).val();
        var quantity = $('#quantity').val();
        var size = $('#change_size').val();
        var product_data = {
            product_id: product_id,
            quantity: quantity,
            size: size
        };
        $.ajax({
            type: "get",
            url: "/make_order",
            data: product_data,
            success: function (result) {
                NotifyMethod(result);
            }, error: function (data) {
                console.log(data);
            }
        });
    });
    // Reload Notifiation
    $('#notify_reload').on('click', function () {
        location.reload();
    });
    // Close Notification
    $('#close_notify').on('click', function () {
        $('.main_notify').eq(0).css("display", "none");
    });
    // Add To Cart By Home Button
    $(document).on('click', '.my_cart_btn', async function () {
        var product_id = $(this).val();
        await addToCart(product_id);
    });
    // Add To Cart
    $('#cart_product').on('click', async function () {
        var product_id = $(this).val();
        console.log(product_id);
        await addToCart(product_id);
    })
    async function addToCart(product_id) {
        await $.ajax({
            type: "get",
            url: "/add_to_cart",
            data: {
                product_id: product_id
            },
            success: function (result) {
                NotifyMethod(result);
            }, error: function (data) {
                console.log(data)
            }
        });
    }
});
function NotifyMethod(result) {
    $('.main_notify').eq(0).css("display", "flex");
    $('#error').html(result.message);
    if (result.status == 200) {
        $('#notify_reload').css('display', 'block');
        $('#close_notify').css('display', 'none');
    } else {
        $('#notify_reload').css('display', 'none');
        $('#close_notify').css('display', 'block');
    }
}
async function changeSlider(count) {
    const slide_time = setInterval(function () {
        for (var i = 0; i < 3; i++) {
            if (i == count) {
                $('.show_content_div').eq(count).css("display", "flex");
                $('.slider_span').eq(count).animate({
                    "padding-left": "15px",
                }, 1000);
                $('.slider_span').eq(count).css({
                    "background": "white",
                });
            } else {
                $('.show_content_div').eq(i).css("display", "none");
                $('.slider_span').eq(i).animate({
                    "padding-left": "0px",
                });
                $('.slider_span').eq(i).css({
                    "background": "transparent",
                });
            }
        }
        if (count == 2) {
            count = 0;
        } else {
            count++;
        }
        // console.log(count);
    }, 4000);
    // setTimeout(function () {
    //     clearInterval(slide_time);
    //     console.log("Stoped");
    // }, 5000);
}
