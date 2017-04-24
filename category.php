<?php
function isPJAX()
{
    return (isset($_SERVER['HTTP_X_PJAX']) && $_SERVER['HTTP_X_PJAX'] == 'true');
}

if (!isPJAX()): ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
    <title>huaji.io</title>
    <link rel="icon" href="img/huaji_s.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="img/huaji_s.png" type="image/x-icon"/>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/pjax.js"></script>
    <script type="text/javascript" src="js/pace.min.js"></script>
    <link rel="stylesheet" href="css/font-awesome.css">

    <link href="css/general.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="header">
    <a class="header_logo pjax" href="index.php"">huaji.io<span
        class="header_logo_sub">batterfly</span></a>
    <ul class="header_menu">
        <li><a class="pjax" href="index.php">Home</a></li>
        <li><a class="pjax" href="page.php?name=code2">Spirits</a></li>
        <li><a class="pjax">Points</a></li>
        <li><a class="pjax">Code</a></li>
        <li><a href="category.php?=code">Trick</a></li>
        <li><a class="pjax" href="about.html">About</a></li>
    </ul>
</div>
<div id="main">
    <?php endif; ?>
    <link href="css/page.css" rel="stylesheet" type="text/css">
    <link href="css/login.css" rel="stylesheet" type="text/css">
    <link href="css/page_footer.css" rel="stylesheet" type="text/css">
    <link href="css/index_page.css" rel="stylesheet" type="text/css">
    <div id="ondev" style="top: 0;height: 400px">
        <p id="ondev_title"></p>
    </div>
    <div id="content" style="margin-top: 0;display: none"></div>
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
    <script type="text/javascript" src="js/category.js"></script>
    <?php if (!isPJAX()): ?>
</div>
</body>
<script type="text/javascript" src="js/general.js"></script>
</html>
<?php endif; ?>
