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
    <link href="css/general.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
</head>
<body>
<div class="header">
    <a class="header_logo pjax" href="index.php"">huaji.io<span
        class="header_logo_sub">batterfly</span></a>
    <ul class="header_menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="category.php?=spirits">Spirits</a></li>
        <li><a href="category.php?=points">Points</a></li>
        <li><a href="category.php?=code">Code</a></li>
        <li><a>About</a></li>
    </ul>
</div>
<div id="main">
    <?php endif;?>
    <title>huaji.io</title>
    <link href="css/index_header.css" rel="stylesheet" type="text/css">
    <link href="css/index_footer.css" rel="stylesheet" type="text/css">
    <link href="css/index_coll.css" rel="stylesheet" type="text/css">
    <link href="css/index_out.css" rel="stylesheet" type="text/css">
    <link href="css/index_ondev.css" rel="stylesheet" type="text/css">
    <link href="css/index_cate.css" rel="stylesheet" type="text/css">
    <link href="css/index_loop.css" rel="stylesheet" type="text/css">
    <link href="css/unslider-dots.css" rel="stylesheet" type="text/css">
    <link href="css/unslider.css" rel="stylesheet" type="text/css">
    <link href="css/index_page.css" rel="stylesheet" type="text/css">
  <div class="header2">
    <span class="header2_title"></span>
    <span class="header2_subtitle"></span>
    <div class="header2_bk"></div>
</div>
<div id="loop"></div>
<div id="cate">
   <a class="cate_box" href="category.php?=spirits">
        <i class="icon-comments"></i>
        <span class="cate_box_title">SPIRITS</span>
   </a>
   <a class="cate_box" href="category.php?=points">
   <i class="icon-quote-left"></i>
        <span class="cate_box_title">POINTS</span>
   </a>
   <a class="cate_box" href="category.php?=code">
   <i class="icon-laptop"></i>
        <span class="cate_box_title">CODE</span>
   </a>
   <a class="cate_box" style="float: right" href="new.php">
   <i class="icon-file-alt"></i>
        <span class="cate_box_title">NEW</span>
   </a>
</div>
<div id="content"></div>
<div id="collection">
<div id="coll_box"></div>
    <div class="coll_detail">
        <div class="coll_hide" onclick="coll_hide()">×</div>
        <div class="coll_detail_title"></div>
        <div class="coll_detail_time"></div>
        <div class="coll_detail_cate"></div>
        <div class="coll_detail_content">Loading...</div>
    </div>
</div>
<div id="ondev">
    <p id="ondev_title">Coming Soon.</p>
    <div id="ondev_content">获取开发者信息与开源信息，请移步<a  href="about.html">关于</a>页面。</div>
</div>
<div id="footer">
    <div class="footer_tips">
        <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/cn/"><img alt="知识共享许可协议" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/3.0/cn/80x15.png" /></a><br />本博客作品均采用<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/cn/">知识共享署名-非商业性使用-禁止演绎 3.0 中国大陆许可协议</a>进行许可。
        <p>* www.huaji.io是huaji.io的SSL安全副本，且huaji.io仍处于测试阶段</p>
    </div>
    <div class="footer_block">
        <p class="footer_block_title">Authority</p>
        <ul class="footer_block_list">
            <li>Developer mode</li>
            <li>Download pages</li>
            <li>Opensource</li>
            <li>Backup</li>
        </ul>
    </div>
    <div class="footer_block">
        <p class="footer_block_title">Contact me</p>
        <ul class="footer_block_list">
            <li>E-mail</li>
            <li>Build-in Messager</li>
            <li>Tencent QQ</li>
            <li>WeChat</li>
        </ul>
    </div>
    <div id="footer_end" style="text-align: center">
        <div style="position: absolute;left: 0">Copyright © 2017 huaji.io All rights reserved.</div>
        <div style="position: absolute;left: 45%">鲁ICP备16011857号-2</div>
        <div style="position: absolute;right: 0">powered by huaji blog</div>
    </div>
</div>
<div class="outfade">Loading...<div>
<script type="text/javascript" src="js/unslider-min.js"></script>
<script type="text/javascript" src="js/jquery.pin.js"></script>
<script type="text/javascript" src="js/index.js"></script>
        <?php if(!isPJAX()):?>
      </div>
</body>
<script type="text/javascript" src="js/pjax.js"></script>
<script type="text/javascript" src="js/pace.min.js"></script>
<script type="text/javascript" src="js/general.js"></script>
</html>
<?php endif;?>