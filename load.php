<?php
header("Content-Type:text/html;charset=utf-8");
function get_files($dir)
{
    $files = array();

    if (!is_dir($dir)) {
        return $files;
    }

    $d = dir($dir);
    while (false !== ($file = $d->read())) {
        if ($file != '.' && $file != '..') {
            $filename = $dir . "/" . $file;

            if (is_file($filename)) {
                $files[] = $filename;
            } else {
                $files = array_merge($files, get_files($filename));
            }
        }
    }
    $d->close();
    return $files;
}


function load_page_intro($page_name){
    $file = fopen('source/pages/' . $page_name . '.art', "rb") or die("file0");
    $intro=strip_tags(fread($file, 350));
    fclose($file);
    return cn_substr($intro,350).'...';
}

function cn_substr($str,$len){
    $value = substr($str, 0, $len);
    $value_length = strlen($value);
    $value_count = 0;
    for ($i = 0; $i < $value_length; $i++)
    {
        if (ord($value{$i}) > 127)
        {
            $value_count++;
        }
    }
    switch ($value_count % 3){
        case 0:{
            return $value;
            break;
        }
        case 1:{
            return substr($str, 0, $value_length - 1);
            break;
        }
        case 2:{
            return substr($str, 0, $value_length - 2);
            break;
        }
    }

}
function db_init()
{
    $db_info = parse_ini_file("util/blog_sql.ini");
    $db_conn = mysqli_connect("127.0.0.1", $db_info['db_name'], $db_info['db_pw'], $db_info['db_name']);
    if ($db_conn->connect_error) {
        die("error" . $db_conn->connect_error);

    } else {

        mysqli_set_charset($db_conn, "utf8");
        $result = mysqli_query($db_conn, "select * from article order by created DESC");
        global $row;
        $row = mysqli_fetch_all($result, MYSQLI_NUM);
        global $row_points;
        global $row_code;
        global $row_spirits;
        global $row_trick;
        global $row_travel;
        $row_spirits = array();
        $row_points = array();
        $row_code = array();
        $row_trick = array();
        $row_travel = array();
        if ($result) {

            $k1 = 0;
            $k2 = 0;
            $k3 = 0;
            $k4 = 0;

            for ($i = 0; $i < count($row); $i++) {
                switch ($row[$i][4]) {
                    case "人月神话":
                        $row_code[$k1] = $row[$i];
                        $k1++;
                        break;
                    case "心情":
                        $row_spirits[$k2] = $row[$i];
                        $k2++;
                        break;
                    case "观点":
                        $row_points[$k3] = $row[$i];
                        $k3++;
                        break;
                    case "奇技淫巧":
                        $row_trick[$k4] = $row[$i];
                        $k4++;
                        break;
                }
            }
        }
    }
}


if(isset($_POST['load_type'])){
    $loadtype = $_POST['load_type'];
    //
    if ($loadtype == 'load_pages') {
        db_init();
        for ($index = 0; $index < sizeof($row); $index++) {
            echo '<div class="page"><div class="page_content"><a class="page_title" href="page.php?name=' . $row[$index][3] . '")>'
                . $row[$index][1]
                . '</a><p class="page_subtitle">'
                . $row[$index][2]
                . '</p><p class="page_intro">';
            echo load_page_intro($row[$index][3]);
            echo'</p><span class="page_info"><a class="page_cate">'
                . $row[$index][4]
                . '</a><span class="page_time">'
                . $row[$index][5]
                . '</span><a class="page_enter" href="page.php?name=' . $row[$index][3] . '")>进入文章></a></span></div><img class="page_img" src="source/shortcut/'
                . $row[$index][3]
                . '.png"></div>';
        }
    }
    if ( $loadtype == 'load_covers') {
        db_init();
        echo '<ul>';
        for ($index = 0; $index < sizeof($row); $index++) {
            if ($row[$index][8] == 1) {
                echo '<li><div class="loop_div"><img class="loop_img" src="source/cover/'
                    . $row[$index][3]
                    . '.jpg"><div class="loop_cover"><br><br><div class="loop_content"><p class="loop_title">'
                    . $row[$index][1]
                    . '</a><br><br><a class="loop_intro" href = "page.php?name='
                    . $row[$index][3]
                    . '">'
                    . $row[$index][2]
                    . '</a><p class="loop_time">'
                    . $row[$index][5]
                    . '</p><p class="loop_cate">'
                    . $row[$index][4]
                    . '</p><br><br><br></div></div></div></li>';
            }
        }
        echo '</ul>';
    }

    if ($loadtype == 'load_page') {
        db_init();
        $page_name = $_POST['name'];
        for ($i = 0; $i < sizeof($row); $i++) {
            if ($row[$i][3] == $page_name) {
                $page_info = array('title' => $row[$i][1], "subtitle" => $row[$i][2], "name" => $row[$i][3], "cate" => $row[$i][4], "time" => $row[$i][5], "isCover" => $row[$i][8]);
                $page_json = json_encode($page_info);
                echo $page_json;
            }
        }
    }
    if($loadtype == 'load_pages_category'){
        db_init();
        $cate_name = $_POST['category'];
        switch ($cate_name){
            case 'spirits':{
                for ($index = 0; $index < sizeof($row_spirits); $index++) {
                    echo '<div class="page"><div class="page_content"><a class="page_title" href="page.php?name=' . $row_spirits[$index][3] . '")>'
                        . $row_spirits[$index][1]
                        . '</a><p class="page_subtitle">'
                        . $row_spirits[$index][2]
                        . '</p><p class="page_intro">';
                    echo load_page_intro($row_spirits[$index][3]);
                    echo'</p><span class="page_info"><a class="page_cate">'
                        . $row_spirits[$index][4]
                        . '</a><span class="page_time">'
                        . $row_spirits[$index][5]
                        . '</span><a class="page_enter" href="page.php?name=' . $row_spirits[$index][3] . '")>进入文章></a></span></div><img class="page_img" src="source/shortcut/'
                        . $row_spirits[$index][3]
                        . '.png"></div>';
                }
                break;
            }
            case 'code':{
                for ($index = 0; $index < sizeof($row_code); $index++) {
                    echo '<div class="page"><div class="page_content"><a class="page_title" href="page.php?name=' . $row_code[$index][3] . '")>'
                        . $row_code[$index][1]
                        . '</a><p class="page_subtitle">'
                        . $row_code[$index][2]
                        . '</p><p class="page_intro">';
                    echo load_page_intro($row_code[$index][3]);
                    echo'</p><span class="page_info"><a class="page_cate">'
                        . $row_code[$index][4]
                        . '</a><span class="page_time">'
                        . $row_code[$index][5]
                        . '</span><a class="page_enter" href="page.php?name=' . $row_code[$index][3] . '")>进入文章></a></span></div><img class="page_img" src="source/shortcut/'
                        . $row_code[$index][3]
                        . '.png"></div>';
                }
                break;

            }
            case 'points':{
                for ($index = 0; $index < sizeof($row_points); $index++) {
                    echo '<div class="page"><div class="page_content"><a class="page_title" href="page.php?name=' . $row_points[$index][3] . '")>'
                        . $row_points[$index][1]
                        . '</a><p class="page_subtitle">'
                        . $row_points[$index][2]
                        . '</p><p class="page_intro">';
                    echo load_page_intro($row_points[$index][3]);
                    echo'</p><span class="page_info"><a class="page_cate">'
                        . $row_points[$index][4]
                        . '</a><span class="page_time">'
                        . $row_points[$index][5]
                        . '</span><a class="page_enter" href="page.php?name=' . $row_points[$index][3] . '")>进入文章></a></span></div><img class="page_img" src="source/shortcut/'
                        . $row_points[$index][3]
                        . '.png"></div>';
                }
                break;
            }

            case 'trick':{
                for ($index = 0; $index < sizeof($row_trick); $index++) {
                    echo '<div class="page"><div class="page_content"><a class="page_title" href="page.php?name=' . $row_trick[$index][3] . '")>'
                        . $row_trick[$index][1]
                        . '</a><p class="page_subtitle">'
                        . $row_trick[$index][2]
                        . '</p><p class="page_intro">';
                    echo load_page_intro($row_trick[$index][3]);
                    echo'</p><span class="page_info"><a class="page_cate">'
                        . $row_trick[$index][4]
                        . '</a><span class="page_time">'
                        . $row_trick[$index][5]
                        . '</span><a class="page_enter" href="page.php?name=' . $row_trick[$index][3] . '")>进入文章></a></span></div><img class="page_img" src="source/shortcut/'
                        . $row_trick[$index][3]
                        . '.png"></div>';
                }
                break;

            }
            case 'travel':{
                for ($index = 0; $index < sizeof($row_travel); $index++) {
                    echo '<div class="page"><div class="page_content"><a class="page_title" href="page.php?name=' . $row_travel[$index][3] . '")>'
                        . $row_travel[$index][1]
                        . '</a><p class="page_subtitle">'
                        . $row_travel[$index][2]
                        . '</p><p class="page_intro">';
                    echo load_page_intro($row_travel[$index][3]);
                    echo'</p><span class="page_info"><a class="page_cate">'
                        . $row_travel[$index][4]
                        . '</a><span class="page_time">'
                        . $row_travel[$index][5]
                        . '</span><a class="page_enter" href="page.php?name=' . $row_travel[$index][3] . '")>进入文章></a></span></div><img class="page_img" src="source/shortcut/'
                        . $row_travel[$index][3]
                        . '.png"></div>';
                }
                break;

            }
        }

    }
    if ($loadtype == 'load_page_content') {
        $page_name = $_POST['name'];
        $file = fopen('source/pages/' . $page_name . '.art', "r") or die("file0");
        echo fread($file, filesize('source/pages/' . $page_name . '.art'));
        fclose($file);
    }

    if ($loadtype == 'load_draft') {
        foreach (get_files('source/drafts') as $get_file) {
            $name = explode('/', $get_file)[2];
            if ($name != '.DS_Store') {
                $info = explode('$%', $name);
                echo '<div class="coll" onclick="coll_detail(this)">
            <span class="coll_box_title">' . $info[0] . '</span>
            <span class="coll_box_time">' . $info[2] . '</span>
            <span class="coll_box_cate">' . $info[1] . '</span>
        </div>';
            }
        }
    }
    if ($loadtype == 'load_draft_content') {
        $drf_name = $_POST['load_info'];
        $file = fopen('source/drafts/' . $drf_name, "r") or die("ERROR");
        echo str_replace(PHP_EOL, '<br>', fread($file, filesize('source/drafts/' . $drf_name)));
        fclose($file);
    }

}
