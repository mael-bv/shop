<?php

function deco(){
    session_start();

    if(isset($_SESSION['azertyuiop'])){
        $_SESSION['azertyuiop'] = array();
        session_destroy();
        header("Location: ../");
    }else{
        header("Location: ../admin/admin.php");
    }
}


?>