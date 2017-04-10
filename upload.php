<?php
if(isset($_FILES['uploadFile'])){
    if($_FILES['uploadFile']['error']>0)
        echo "error";
    else{
        move_uploaded_file($_FILES['uploadFile']['tmp_name'],'source/upload/'.$_FILES['uploadFile']['name']);
    }
}
?>