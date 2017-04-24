<?php
session_start();
if (isset($_SESSION['status']))
    header("location: index.php");
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
<?php include 'header.php'?>
<div id="main">
    <?php endif; ?>
    <title>登录 - huaji.io</title>
    <link href="css/page.css" rel="stylesheet" type="text/css">
    <link href="css/login.css" rel="stylesheet" type="text/css">
    <link href="css/page_footer.css" rel="stylesheet" type="text/css">
    <div id="ondev">
        <p id="ondev_title">Manager</p>
        <form class="loginBox" name="blogLoginForm" method="post" action="authority.php">
            <input class="loginUserID" name="loginUserID" type="text" placeholder="Account ID" autofocus spellcheck="false"><br>
            <input class="loginPws" name="loginPws" type="password" placeholder="Passwords"><br>
            <input class="loginBut" name="blog_login_request" type="submit" value="Done">
        </form>
    </div>
    <?php include "footer.php"?>
    <script type="text/javascript" src="js/login.js"></script>

    <?php if (!isPJAX()): ?>
</div>
</body>
<script type="text/javascript" src="js/pjax.js"></script>
<script type="text/javascript" src="js/pace.min.js"></script>
<script type="text/javascript" src="js/general.js"></script>
</html>
<?php endif; ?>
