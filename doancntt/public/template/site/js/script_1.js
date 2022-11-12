$(document).ready(function () {
    //load_slide();
    /*$('.slider_carousel').bxSlider({

          slideWidth: 85,

          minSlides: 1,

          maxSlides: 4,

          slideMargin: 9,

          pager: false,

          adaptiveHeight: true

      });*/
    $(".slide a").click(function () {
        $(".slide a").removeClass("active");
        $(this).addClass("active");
    });
    /*
    $(".various").fancybox({
        maxWidth: 800,
        maxHeight: 600,
        fitToView: false,
        width: '70%',
        height: '70%',
        autoSize: false,
        closeClick: false,
        openEffect: 'none',
        closeEffect: 'none'
    });
    */
});
var action = "click";
var speed = "500";
//Document.Ready
$(document).ready(function () {
    $("li.q").click(function () {
        var img = $(this).children("img");
        var id = $(this).data("id");
        if ($(this).hasClass("rotate1")) {
            $(this).removeClass("rotate1");
            $("ul.faq")
                .find($("#" + id))
                .fadeOut(300);
            img.attr("src", "/storage/uploads/row_2.png");
        } else {
            $(this).addClass("rotate1");
            $("ul.faq")
                .find($("#" + id))
                .fadeIn(300);
            img.attr("src", "/storage/uploads/row_2_blue.png");
        }
    });
}); //End Ready
function load_slide() {
    $(window).load(function () {
        $("#carousel").flexslider({
            animation: "slide",
            controlNav: true,
            animationLoop: false,
            slideshow: true,
            itemWidth: 84.5,
            itemMargin: 9,
            asNavFor: "#slider",
        });
        $("#slider").flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: true,
            sync: "#carousel",
            start: function (slider) {
                $("body").removeClass("loading");
            },
        });
    });
}
