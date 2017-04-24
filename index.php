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
<?php include 'header.php'?>
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
<div class="cate" id="cate0">
   <a class="cate_box2" href="category.php?=spirits">
        <i class="icon-comments"></i>
        <span class="cate_box_title2">spirits</span>
   </a>
   <a class="cate_box2" href="category.php?=points">
   <i class="icon-quote-left"></i>
        <span class="cate_box_title2">points</span>
   </a>
   <a class="cate_box2" href="category.php?=code">
   <i class="icon-laptop"></i>
        <span class="cate_box_title2">code</span>
   </a>
   <a class="cate_box2" href="category.php?=trick">
   <i class="icon-magic"></i>
        <span class="cate_box_title2">trick</span>
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
<div class="cate" style="display: none">
   <a class="cate_box" href="upload.php">
   <i class="icon-cloud-upload"></i>
        <span class="cate_box_title">UPLOAD</span>
   </a>
   <a class="cate_box" href="new.php">
   <i class="icon-file-alt"></i>
        <span class="cate_box_title">NEW</span>
   </a>
</div>
<div id="ondev">
    <p id="ondev_title">Coming Soon.</p>
    <div id="ondev_content">获取开发者信息与开源信息，请移步<a  href="about.html">关于</a>页面。</div>
</div>
<?php include "footer.php"?>
<div class="outfade">indexing...<div>
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