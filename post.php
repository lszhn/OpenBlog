<?php
header("Content-Type:text/plain;charset=utf-8");
header("Content-type:text/html; charset=utf-8");

if ($_POST['method'] == 'publish_new_article') {
    new_page();
}elseif ($_POST['method'] == 'publish_modified_article'){
    modify_page();
}

function new_page()
{
    $db_conn = new mysqli("127.0.0.1", "huaji_blog", "Zzxhuajiblog", "huaji_blog");
    mysqli_set_charset($db_conn, "utf8");
    if (!mysqli_connect_errno()) {
        $sql = 'INSERT INTO article(title,subtitle,name,category,created,isCover) VALUES ("' . $_POST['title'] . '","' . $_POST['subtitle'] . '","' . $_POST['name'] . '","' . $_POST['category'] . '","' . date("Y-m-d") . '","' . $_POST['iscover'] . '")';
        if ($db_conn->query($sql)) {
            if(!file_exists('source/pages/' . $_POST['name'].'.art')){
                $article_file = fopen('source/pages/' . $_POST['name'] . '.art', "w");
                fwrite($article_file, $_POST['content']);
                fclose($article_file);
            }else {
                echo"文件写入异常";
            }
        } else {
            echo "数据库插入异常";
        }

    } else echo "数据库连接异常";
    echo"发布成功";
}
function modify_page()
{
    $db_conn = new mysqli("127.0.0.1", "huaji_blog", "Zzxhuajiblog", "huaji_blog");
    mysqli_set_charset($db_conn, "utf8");
    if (!mysqli_connect_errno()) {
        $sql = 'UPDATE article 
                SET title="' . $_POST["title"].'",subtitle="'.$_POST["subtitle"].'",category="'.$_POST["category"].'",isCover='.$_POST["iscover"].',modified="'.date("Y-m-d").'"  
                 WHERE name = "'.$_POST["name"].'"';
        if ($db_conn->query($sql)) {
            $article_file = fopen('source/pages/' . $_POST['name'] . '.art', "w");
            fwrite($article_file, $_POST['content']);
            fclose($article_file);
        } else {
            echo "数据库更新失败";
            return false;
        }
    } else echo "数据库连接异常";
    echo"更新成功";
}
