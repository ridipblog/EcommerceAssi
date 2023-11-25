$(document).ready(function () {
    var count = 1;
    console.log("Ok");
    // const changeSlide = setInterval(function () {
    //     $('.show_content_div').eq(1).css("display", "flex");
    // }, 1000);
    changeSlider(count);
});
async function changeSlider(count) {
    const slide_time = setInterval(function () {
        for (var i = 0; i < 3; i++) {
            if (i == count) {
                console.log(i);
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
