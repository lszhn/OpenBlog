init_index();

//
//functions for utility

var keys = {37: 1, 38: 1, 39: 1, 40: 1};

function preventDefault(e) {
    e = e || window.event;
    if (e.preventDefault)
        e.preventDefault();
    e.returnValue = false;
}

function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}
var oldonwheel, oldonmousewheel1, oldonmousewheel2, oldontouchmove, oldonkeydown
    , isDisabled;
function disableScroll() {
    if (window.addEventListener) // older FF
        window.addEventListener('DOMMouseScroll', preventDefault, false);
    oldonwheel = window.onwheel;
    window.onwheel = preventDefault; // modern standard

    oldonmousewheel1 = window.onmousewheel;
    window.onmousewheel = preventDefault; // older browsers, IE
    oldonmousewheel2 = document.onmousewheel;
    document.onmousewheel = preventDefault; // older browsers, IE

    oldontouchmove = window.ontouchmove;
    window.ontouchmove = preventDefault; // mobile

    oldonkeydown = document.onkeydown;
    document.onkeydown = preventDefaultForScrollKeys;
    isDisabled = true;
}

function enableScroll() {
    if (!isDisabled) return;
    if (window.removeEventListener)
        window.removeEventListener('DOMMouseScroll', preventDefault, false);

    window.onwheel = oldonwheel; // modern standard

    window.onmousewheel = oldonmousewheel1; // older browsers, IE
    document.onmousewheel = oldonmousewheel2; // older browsers, IE

    window.ontouchmove = oldontouchmove; // mobile

    document.onkeydown = oldonkeydown;
    isDisabled = false;
}
window.scrollHanlder = {
    disableScroll: disableScroll,
    enableScroll: enableScroll
};

function _scroll(obj, time) {
    $(document.body).animate({scrollTop: $(obj).offset().top}, time);
}

//

function coll_hide() {
    $(".coll_detail").fadeOut(200, function () {
        _scroll("#collection", 400);
        resetColl();
        cleanColl()
    });
}

//

window.onscroll = function () {
    _scroll_deduction();
};
$(window).resize(function () {
    $loop_img = $(".loop_img");
    $loop_img.css({
        "height": parseFloat($loop_img.css("width") / 21 * 9) + "px"
    });
    var loop_img_height = parseFloat($loop_img.css("width")) / 21 * 9;
    $('#loop').css({
        "height": loop_img_height + "px"
    });
    $(".unslider-nav").css({"top": loop_img_height - 40});
    $(".page_content").css({
        "width": getWidth() * 0.7 - 200 + "px"
    });
    coll_top = $("#collection").position().top - 40;
    recent_articles_top = $("#content").position().top - 40;
    loop_top = $("#loop").position().top - 40;
    dash_top = $("#cate0").position().top - 40;
    footer_top = $("#footer").position().top - 40;
});

//

function device_support() {
    var isMobile = {
        Android: function () {
            return navigator.userAgent.match(/Android/i) ? true : false;
        },
        BlackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i) ? true : false;
        },
        iOS: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i) ? true : false;
        },
        Windows: function () {
            return navigator.userAgent.match(/IEMobile/i) ? true : false;
        },
        any: function () {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Windows());
        }
    };
    if (isMobile.any()) {
        window.location.href = "sorry.php";
    }
}

//

function cleanColl() {
    $(".coll_detail_title").html('');
    $(".coll_detail_time").html('');
    $(".coll_detail_cate").html('');
    $(".coll_detail_content").html("loading...");
}

//

function setColl() {
    $("#collection").css({
        "height": $(".coll_detail_content").height() + 150 + "px"
    });
}

//

function resetColl() {
    $("#collection").css({
        "height": Math.ceil($("#coll_box").children().length / 3) * 100 +60+ "px"
    });
}

//

function _scroll_deduction() {
    var t = document.documentElement.scrollTop || document.body.scrollTop;
    $header2 = $(".header2");
    $header2_bk = $(".header2_bk");
    $header2_title = $(".header2_title");
    switch (true) {
        case t < 40: {
            $header2_title.html("Home");
            $header2_bk.css({display: ""});
            $header2.css({
                "background-color": "transparent",
                "position": "",
                "top": "40px",
                "-webkit-backdrop-filter": "blur(0px)",
                "border-bottom": "1px transparent"
            });
            break;
        }
        case t >= 40 && t < dash_top: {
            $header2_title.html("封面文章");
            $header2.css({
                "background-color": "rgba(0,0,0,0.7)",
                "position": "fixed",
                "top": 0,
                "color": "white",
                "-webkit-backdrop-filter": "blur(5px)",
                "border-bottom": "1px solid rgba(150,150,150,0.5)"

            });
            $header2_bk.css({"display": "none"});
            break;
        }
        case t >= dash_top && t < recent_articles_top: {
            $header2_title.html("仪表盘");
            $header2.css({
                "background-color": "rgba(255,255,255,0.7)",
                "position": "fixed",
                "top": 0,
                "color": "black",
                "border-bottom": "1px solid rgba(150,150,150,0.5)"

            });
            $header2_bk.css({"display": "none"});
            break;
        }
        case t >= recent_articles_top && t < coll_top: {
            $header2_title.html("最近文章");
            $header2.css({
                "background-color": "rgba(255,255,255,0.7)",
                "position": "fixed",
                "top": 0,
                "color": "black",
                "border-bottom": "1px solid rgba(150,150,150,0.5)"

            });
            $header2_bk.css({"display": "none"});

            break;
        }
        case t >= coll_top: {
            $header2_title.html("简笔");
            $header2.css({
                "background-color": "rgba(0,0,0,0.7)",
                "position": "fixed",
                "top": 0,
                "color": "white",
                "border-bottom": "1px solid rgba(150,150,150,0.5)"
            });
            $header2_bk.css({"display": "none"});

            break;
        }
    }
}
//

//functions for initialization

function init_index() {
    device_support();
    disableScroll();
    $.post("load.php", {load_type: "load_covers"}, function (data) {
        $("#loop").html(data);
    }).done(function () {
        $loop_img = $(".loop_img");
        $loop_img.css({
            "height": parseFloat($loop_img.css("width") / 21 * 9) + "px"
        });
        var loop_img_height = parseFloat($loop_img.css("width")) / 21 * 9;
        $('#loop').unslider({
            "autoplay": true,
            "animation": "fade",
            "dots": true,
            "arrows": false,
            "speed": 500,
            "delay": 8000
        }).css({
            "height": loop_img_height + "px"
        });
        $(".unslider-nav").css({"top": loop_img_height - 40});
        $.post("load.php", {load_type: "load_pages"}, function (data) {
            $("#content").html(data);
        }).done(function () {
            $(".page_content").css({
                "width": getWidth() * 0.7 - 200 + "px"
            });
            $.post("load.php", {load_type: "load_draft"}).done(function (data) {
                $("#coll_box").html(data);
            }).done(function () {
                coll_top = $("#collection").position().top - 45;
                recent_articles_top = $("#content").position().top - 45;
                loop_top = $("#loop").position().top - 45;
                dash_top = $("#cate0").position().top - 45;
                footer_top = $("#footer").position().top - 45;
                $(".header2_title").html("Home");
                $(".outfade").fadeOut(1000);
            });
            enableScroll();
        });
    });

    scroll_status = 10;
}

function coll_detail(obj) {

    var title = $(obj).children(".coll_box_title").html();
    var time = $(obj).children(".coll_box_time").html();
    var cate = $(obj).children(".coll_box_cate").html();
    $(".coll_detail_title").html(title);
    $(".coll_detail_time").html(time);
    $(".coll_detail_cate").html(cate);
    _scroll("#collection", 500);
    $(".coll_detail").fadeIn(200);
    var info = title + '$%' + cate + '$%' + time;
    $.post("load.php", {
        load_type: "load_draft_content",
        load_info: info
    }).done(function (data) {
        $(".coll_detail_content").html(data);
        setColl();
    });
}
