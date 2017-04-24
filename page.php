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
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="css/font-awesome.css">

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
        <li><a href="category.php?=trick">Trick</a></li>
        <li><a>About</a></li>
    </ul>

</div>
<div id="main">
    <?php endif; ?>
    <title>huaji.io</title>
    <link href="css/page.css" rel="stylesheet" type="text/css">
    <link href="css/page_footer.css" rel="stylesheet" type="text/css">
    <link href="css/hljs.default.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/highlight.min.js"></script>
    <div class="header2">
        <span class="header2_title">文章</span>
        <span class="header2_subtitle"></span>
        <div class="header2_bk"></div>
    </div>
    <div id="page_header">
        <div id="page_header_img_box">
            <img id="page_header_img">
        </div>
        <div id="page_header_content">
            <div id="page_header_title"></div>
            <div id="page_header_subtitle"></div><br>
            <span id="page_header_info">
                <a id="page_header_cate"></a>
                <span id="page_header_time"></span>
            </span>
        </div>
    </div>
    <div id="page_content"></div>
<?php include "footer.php"?>
    <script type="text/javascript" src="js/page.js"></script>
    <?php if(!isPJAX()):?>
</div>
</body>
<script type="text/javascript" src="js/pace.min.js"></script>
<script type="text/javascript" src="js/pjax.js"></script>
<script type="text/javascript" src="js/general.js"></script>
</html>
<?php endif;?>