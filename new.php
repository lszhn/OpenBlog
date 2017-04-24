<?php
session_start();
if(!isset($_SESSION['status']))
    header("location: login.php");
else{
    if(!$_SESSION['status'])
        header("location: login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
    <link rel="icon" href="img/huaji_s.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="img/huaji_s.png" type="image/x-icon"/>
    <title>创建新文章</title>
    <link href="css/index_footer.css" rel="stylesheet" type="text/css">
    <link href="css/new.css" rel="stylesheet" type="text/css">
    <link href="css/new.css" rel="stylesheet" type="text/css">
    <link href="css/general.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="editor/dist/css/wangEditor.min.css">
    <script src="js/jquery-3.1.1.min.js"></script>

</head>
<body id=new_article_body>
<div class="header">
    <a id="header_new_logo" class="header_logo">huaji.io<span class="header_logo_sub">batterfly</span></a>
    <form id="uploadForm" class="file_upload" enctype="multipart/form-data">
        <input id="uploadFile" type="file" name="uploadFile"/>
    </form>
    <a id="header_new_publish" class="hj_button" ondblclick="publish()">发布</a>
</div>
<div class="header2">
    <div class="header2_title">无标题文章</div>
</div>
<div id="category_new">
    <div class="hjs_con">
        <div onmouseover="over_hjs2(this)" onmouseout="leave_hjs2(this)" onclick="click_hjs(this)" class="hjs_result">心情</div>
        <br>
        <div class="hjs_list" id="category_list">
            <p onmouseover="over_hjs(this)" onmouseout="leave_hjs(this)" onclick="choose_hjs(this)">心情</p><br>
            <p onmouseover="over_hjs(this)" onmouseout="leave_hjs(this)" onclick="choose_hjs(this)">人月神话</p><br>
            <p onmouseover="over_hjs(this)" onmouseout="leave_hjs(this)" onclick="choose_hjs(this)">观点</p><br>
            <p onmouseover="over_hjs(this)" onmouseout="leave_hjs(this)" onclick="choose_hjs(this)">旅行</p><br>
            <p onmouseover="over_hjs(this)" onmouseout="leave_hjs(this)" onclick="choose_hjs(this)">技巧</p>

        </div>
    </div>

</div>
<div id="new_article_words">

    <input id="new_article_title" class="hjt" type="text" title="article_title"/><br>
    https://www.huaji.io/page.php?name =
    <input id="new_article_name" type="text" title="article_name"/>

</div>

<div id="new_article_box">
    <div id="new_article_content">
        <p>

        </p>
    </div>
</div>
<?php include "footer.php"?>
</body>
<script type="text/javascript" src="js/new.js"></script>
<script type="text/javascript" src="editor/dist/js/wangEditor.js"></script>
<script type="text/javascript">
    var editor = new wangEditor('new_article_content');
    wangEditor.config.printLog = false;
    editor.create();
</script>


</html>