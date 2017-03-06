function getWidth() {
    return document.body.clientWidth;
}
function getHeight() {
    return document.body.clientHeight;
}
function dev_pod() {
    $("#dev_pod").fadeToggle(500);
}
function set_mid(e) {
    $e = $(e);
    $e.css({
        "margin-left":(parseInt(e.parents("div").css("width"))-parseInt($(e).css("width")))*0.5+"px"
    });
}
$(document).ready(
    function () {
        $("#dock").css({
            "margin-left":getWidth()*0.5-200+"px",
            "top": 500+"px"
        });
        set_mid($("#nav"));
        set_mid($("#nav_content"));
        width0 = parseInt($("#m1").css("width"));
        left1 = $("#m1").position().left;
        left2 = $("#m2").position().left;
        left3 = $("#m3").position().left;
        left4 = $("#m4").position().left;
        left5 = $("#m5").position().left;

    });
function nav_stop() {
    $(".m_img").animate({width: width0 + "px", height: width0 + "px"}, 100);
}
function nav_ani() {
    $box = $("#nav");
    $m1 = $("#m1");
    $m2 = $("#m2");
    $m3 = $("#m3");
    $m4 = $("#m4");
    $m5 = $("#m5");
    ev = window.event || ev;

    var x = ev.clientX - parseInt($box.css("margin-left"));
    var d1 = Math.abs(x - left1 - width0 * 0.5 - parseInt($m1.css("margin-left")));
    var d2 = Math.abs(x - left2 - width0 * 0.5 - parseInt($m2.css("margin-left")));
    var d3 = Math.abs(x - left3 - width0 * 0.5 - parseInt($m3.css("margin-left")));
    var d4 = Math.abs(x - left4 - width0 * 0.5 - parseInt($m4.css("margin-left")));
    var d5 = Math.abs(x - left5 - width0 * 0.5 - parseInt($m5.css("margin-left")));
    if (d1 < (width0 * 3)) {
        var cent = Math.abs(0.4 * ( 1 - d1 / (width0 * 3) ));

        $m1.animate({
            width: width0 * (1 + cent) + "px",
            height: width0 * (1 + cent) + "px",
            marginTop: (0 - width0 * cent) + "px"
        }, 0);
    } else {
        $m1.animate({width: width0 + "px", height: width0 + "px", marginTop: 0}, 0);
    }
    if (d2 < (width0 * 3)) {
        var cent = Math.abs(0.4 * ( 1 - d2 / (width0 * 3)));

        $m2.animate({
            width: width0 * (1 + cent) + "px",
            height: width0 * (1 + cent) + "px",
            marginTop: (0 - width0 * cent) + "px"
        }, 0);
    } else {
        $m2.animate({width: width0 + "px", height: width0 + "px", marginTop: 0}, 0);
    }
    if (d3 < (width0 * 3)) {
        var cent = Math.abs(0.4 * ( 1 - d3 / (width0 * 3)));

        $m3.animate({
            width: width0 * (1 + cent) + "px",
            height: width0 * (1 + cent) + "px",
            marginTop: (0 - width0 * cent) + "px"
        }, 0);
    } else {
        $m3.animate({width: width0 + "px", height: width0 + "px", marginTop: 0}, 0);
    }
    if (d4 < (width0 * 3)) {
        var cent = Math.abs(0.4 * ( 1 - d4 / (width0 * 3) ));

        $m4.animate({
            width: width0 * (1 + cent) + "px",
            height: width0 * (1 + cent) + "px",
            marginTop: (0 - width0 * cent) + "px"
        }, 0);
    } else {
        $m4.animate({width: width0 + "px", height: width0 + "px", marginTop: 0}, 0);
    }
    if (d5 < (width0 * 3)) {
        $("#dev_0").html(d5);
        var cent = Math.abs(0.4 * ( 1 - d5 / (width0 * 3) ));
        $("#dev_1").html(cent);
        $m5.animate({
            width: width0 * (1 + cent) + "px",
            height: width0 * (1 + cent) + "px",
            marginTop: (0 - width0 * cent) + "px"
        }, 0);
    } else {
        $m5.animate({width: width0 + "px", height: width0 + "px", marginTop: 0}, 0);
    }

}
