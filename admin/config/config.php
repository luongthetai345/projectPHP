<?php
    $mysqli = mysqli_connect('localhost', 'root', '', 'php_ad');
    if(mysqli_connect_errno()){
        echo "Error connectiong to MySQL: ".mysqli_connect_error();
    }
?>