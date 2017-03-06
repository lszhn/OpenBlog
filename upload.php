<?php
if(isset($_FILES['first'])){
    if($_FILES['first']['error']>0)
        echo "error";
    else{
        move_uploaded_file($_FILES['first']['tmp_name'],'uploads/'.$_FILES['first']['name']);
    }
}
?>