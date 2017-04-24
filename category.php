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
<?php include 'header.php'?>
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
    <?php include "footer.php"?>
    <script type="text/javascript" src="js/category.js"></script>
    <?php if (!isPJAX()): ?>
</div>
</body>
<script type="text/javascript" src="js/general.js"></script>
</html>
<?php endif; ?>
