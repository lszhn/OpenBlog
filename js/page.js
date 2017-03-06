init_page();


//
function init_page() {
    device_support();
    var page_name = getname();
    if (page_name == '')
        window.location.href = "index.php";
    else {
        $.post("load.php",
            {
                name: page_name,
                load_type: "load_page"
            }
            , function (data) {
                var page_json = $.parseJSON(data);
                $("#page_header_title").html(page_json.title);
                document.title = page_json.title + ' - huaji.io';
                $("#page_header_cate").html(page_json.cate);
                $("#page_header_time").html(page_json.time);
                $("#page_header_subtitle").html(page_json.subtitle);
                $("#page_header_img").attr("src", 'source/shortcut/' + page_name + '.png');
                $("#page_header_content").css({
                    "width": getWidth() * 0.8 - 320 + "px"
                });
            });
        $.post("load.php", {
            load_type: "load_page_content",
            name: getname()
        }, function (data) {
            if (data != "file0") {
                $("#page_content").html(data);
                $("#footer").fadeIn(300);
            } else {
                window.location.href = "index.php";
            }
        });
    }
}

$(window).resize(function () {
    $("#page_header_content").css({
        "width": getWidth() * 0.8 - 320 + "px"
    });
});
window.onscroll = function () {
};
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
