<?php
    if(isset($_SESSION['usename'])){
        $user=$_SESSION['usename'];
        echo "hello $user";
    }
?>
