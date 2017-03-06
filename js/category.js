init_cate();
//
function init_cate() {
    device_support();

    $.post("load.php", {
        load_type: "load_pages_category",
        category:getname()
    }, function (data) {
        $("#content").fadeIn(500);
        $("#content").html(data);
    }).done(function () {
        $(".page_content").css({
            "width":getWidth()*0.7 - 200 +"px"
        });
        $("#ondev_title").html(getname());
        $("#footer").fadeIn(500);
    });
}
function getname() {
    var fullurl = location.search;
    var getstr = fullurl.split("=");
    return getstr[1];
}

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