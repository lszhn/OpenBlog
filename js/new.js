window.onscroll = function () {
    var t = document.documentElement.scrollTop || document.body.scrollTop;
    if (t > 40) {
        $("#header2").css({
            "position": "fixed",
            "top": 0
        });
    } else {
        $("#header2").css({
            "position": "absolute",
            "top": "40px"
        });
    }
    hasPost = false;
};
window.onbeforeunload = function (event) {
    if (!hasPost)
        return confirm("数据没有保存");
};
function click_hjs(e) {
    $("#category_list").slideToggle(150);

}

function over_hjs(e) {
    $(e).css({
        "color": "RGB(240,240,240)"
    });
}
function over_hjs2(e) {
    $(e).css({
        "color": "RGB(150,150,150)"
    });
}
function leave_hjs(e) {
    $(e).css({
        "color": "white"
    });
}
function leave_hjs2(e) {
    $(e).css({
        "color": "RGB(100,100,100)"
    });
}
function choose_hjs(e) {
    $(".hjs_result").html($(e).html());
    $("#category_list").slideToggle(150);
}
function hjtReady() {
    var $hjt = $(".hjt");
    $hjt.click(function () {
        $hjt.css({
            "border-color": "#1589c9"
        })
    });
    $("#new_article_words").mouseleave(function () {
        $hjt.css({
            "border-color": "RGB(204,204,204)"
        });
        $("#mini_title").html($("#new_article_title").html());
    })
}
function refresh_title() {
    var publish_title_sub = $("#new_article_title").val().split("-");
    var publish_title = publish_title_sub[0];
    var publish_sub = publish_title_sub[1];
    $(".header2_title").html(publish_title);
    $(".header2_subtitle").html(publish_sub);
}
$("#new_article_title").change(function () {
    refresh_title();
});
function publish() {
    var publish_content = editor.$txt.html();
    var publish_cate = $(".hjs_result").text();
    var publish_title_sub = $("#new_article_title").val().split("-");
    var publish_title = publish_title_sub[0];
    var publish_sub = publish_title_sub[1];
    var publish_iscover = publish_title_sub[2];
    var publish_name = $("#new_article_name").val();
    if (publish_title == "" || publish_name == "" || publish_iscover == "") {
        alert("文章参数错误");
        return;
    }
    if (reload_name == null) {
        $.post("post.php", {
            method: "publish_new_article",
            title: publish_title,
            subtitle: publish_sub,
            name: publish_name,
            category: publish_cate,
            content: publish_content,
            iscover: publish_iscover
        }, function (data) {
            alert(data);
            if (data == "发布成功") {
                hasPost = true;
                window.location.href = "page.php?name=" + publish_name;
            }
        });
    } else {
        $.post("post.php", {
            method: "publish_modified_article",
            title: publish_title,
            subtitle: publish_sub,
            name: publish_name,
            category: publish_cate,
            content: publish_content,
            iscover: publish_iscover
        }, function (data) {
            alert(data);
            if (data == "更新成功") {
                hasPost = true;
                window.location.href = "page.php?name=" + publish_name;
            }
        });
    }

}
window.onload = function () {

    reload_name = getname();
    if (reload_name != null) {
        $.post("load.php",
            {
                name: reload_name,
                load_type: "load_page"
            }
            , function (data) {
                var page_json = $.parseJSON(data);
                $("#new_article_title").val(page_json.title + '-' + page_json.subtitle + '-' + page_json.isCover);
                $("#new_article_name").val(page_json.name);
                $(".hjs_result").html(page_json.cate);
                refresh_title();
            });
        $.post("load.php", {
            load_type: "load_page_content",
            name: getname()
        }, function (data) {
            if (data != "file0") {
                editor.$txt.html(data);
            } else {
                window.location.href = "https://www.huaji.io";
            }
        });
    }
    hjtReady();

};

//
function getname() {
    var fullurl = location.search;
    var getstr = fullurl.split("=");
    return getstr[1];
}


$("#uploadForm").on("change", function() {
    $.ajax({
        url: 'upload.php',
        type: 'POST',
        cache: false,
        data: new FormData($('#uploadForm')[0]),
        processData: false,
        contentType: false
    }).done(function(res) {
    }).fail(function(res) {});
});