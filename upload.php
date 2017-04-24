<?php

session_start();
if(!isset($_SESSION['status']))
    header("location: login.php");
else{
    if(!$_SESSION['status'])
        header("location: login.php");
}
if(isset($_FILES['uploadFile'])){
    if($_FILES['uploadFile']['error']>0)
        echo "error";
    else{
        move_uploaded_file($_FILES['uploadFile']['tmp_name'],'source/upload/'.$_FILES['uploadFile']['name']);
    }
}
?>
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
    <title>huaji.io</title>
    <link href="css/page.css" rel="stylesheet" type="text/css">
    <link href="css/page_footer.css" rel="stylesheet" type="text/css">
    <link href="css/upload.css" rel="stylesheet" type="text/css">
    <link href="css/login.css" rel="stylesheet" type="text/css">
    <div id="ondev">
        <p id="ondev_title">Upload</p>

        <form id="uploadForm" class="file_upload" enctype="multipart/form-data">
            <div id="uploadDiv">
                <img src="img/mac_button.png">
            <p id="bar">&nbsp;</p>
                <p class="showFileName">File Uploader</p><br>
            <a class="file">
                Open...<input id="uploadFile" type="file" name="uploadFile"/>
            </a></div>
        </form>
    </div>
    <?php include "footer.php"?>
    <script type="text/javascript" src="js/login.js"></script>
    </div>
    </body>
    <script type="text/javascript" src="js/pace.min.js"></script>
    </html>