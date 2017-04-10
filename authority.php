<?php

function user_auth($uid,$pws){
    $db_conn = mysqli_connect("127.0.0.1", "huaji_blog", "Zzxhuajiblog", "huaji_blog");
    if ($db_conn->connect_error) {
        die("error" . $db_conn->connect_error);

    } else {

        mysqli_set_charset($db_conn, "utf8");
        $result = mysqli_query($db_conn,"select name,pws from user where uid='$uid'");
        $row = mysqli_fetch_all($result,MYSQLI_NUM);
        if(password_verify($pws,$row[0][1])){
            session_start();
            $_SESSION['uid'] = $uid;
            $_SESSION['name'] = $row[0][0];
            $_SESSION['status'] = true;
            header("Location: new.php");
        }else
            header("Location: login.php");
    }
}
if(isset($_POST['blog_login_request'])){
    $username = htmlspecialchars($_POST['loginUserID']);
    $passwords = htmlspecialchars($_POST['loginPws']);
    user_auth($username,$passwords);
}