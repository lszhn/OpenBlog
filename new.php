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
<div id="footer">
    <div class="footer_tips">
        <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/cn/"><img alt="知识共享许可协议" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/3.0/cn/80x15.png" /></a><br />本博客作品均采用<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/cn/">知识共享署名-非商业性使用-禁止演绎 3.0 中国大陆许可协议</a>进行许可。
        <p>* www.huaji.io是huaji.io的SSL安全副本，且huaji.io仍处于测试阶段</p>
    </div>
    <div class="footer_block" style="margin-left: 10%">
        <p class="footer_block_title">Authority</p>
        <ul class="footer_block_list">
            <li><a href="login.php">Login</a></li>
            <li><a href="new.php">New page</a></li>
            <li><a href="upload.php">Upload</a></li>
            <li><a href="status.php">Status</a></li>
        </ul>
    </div>
    <div class="footer_block">
        <p class="footer_block_title">Contact me</p>
        <ul class="footer_block_list">
            <li><a href="mailto:zhixiang96@hotmail.com">E-mail</a></li>
            <li><a href="https://github.com/zhixiang96">Github</a></li>
        </ul>
    </div>
    <div class="footer_block">
        <p class="footer_block_title">Category</p>
        <ul class="footer_block_list">
            <li><a href="category.php?=spirits">Spirits</a></li>
            <li><a href="category.php?=points">Points</a></li>
            <li><a href="category.php?=code">Code</a></li>
            <li><a href="category.php?=trick">Trick</a></li>
        </ul>
    </div>
    <div class="footer_block">
        <p class="footer_block_title">Partner sites</p>
        <ul class="footer_block_list">
            <li><a href="http://cn.naivefrog.win">naivefrog's Blog</a></li>
            <li><a href="https://www.moekr.com">Moekr's Blog</a></li>
            <li><a href="https://www.belang.org">belang.org</a></li>
            <li><a href="http://bella.huaji.io">Bella</a></li>
        </ul>
    </div>
    <div id="footer_end" style="text-align: center">
        <div style="position: absolute;left: 0">Copyright © 2017 huaji.io All rights reserved.</div>
        <div style="position: absolute;left: 45%">鲁ICP备16011857号-2</div>
        <div style="position: absolute;right: 0">powered by <a href="http://bella.huaji.io">Bella</a></div>
    </div>
</div>
</body>
<script type="text/javascript" src="js/new.js"></script>
<script type="text/javascript" src="editor/dist/js/wangEditor.js"></script>
<script type="text/javascript">
    var editor = new wangEditor('new_article_content');
    wangEditor.config.printLog = false;
    editor.create();
</script>


</html>