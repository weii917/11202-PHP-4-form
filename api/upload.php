<?php

if(!empty($_FILES['img']['tmp_name'])){
    echo $_FILES['img']['tmp_name'];
    
    move_uploaded_file($_FILES['img']['tmp_name'],"../imgs/".$_FILES['img']['name']);
}
?>