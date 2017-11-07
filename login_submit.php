<?php
if (isset($_POST['username']) and isset($_POST['password'])) {
    $username = $_POST['username'];
    $substr = substr($username, 0, 2);
    echo $substr;

    if ($substr == "CU"){
        include "Customer View_PHP.php";
    }elseif ($substr == "MR"){

    }elseif ($substr == "OP"){

    }
    else{
        $message = "enter user name password correctly";
        include "CEB_login.php";
    }
}
?>