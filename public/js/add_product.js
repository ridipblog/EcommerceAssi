$(document).ready(function () {

    $('#add_product_form').on('submit', async function (e) {
        e.preventDefault();
        let form_data = new FormData($('#add_product_form')[0]);
        $.ajax({
            type: "post",
            url: "/add_product",
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            data: form_data,
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function (result) {
                console.log(result);
            }, error: function (data) {
                console.log(data);
            }
        });
        console.log("Ok");
    })
})
