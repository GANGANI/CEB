<?php
if (isset($_POST['username']) and isset($_POST['password'])) {
    $username = $_POST['username'];
    $substr = substr($username, 0, 2);
    //echo $substr;
    session_start();
    $_SESSION['us'] = $username;
    //echo "username is".$_SESSION['us'];

    if ($substr == "CU"){
        $table = 'customer';
        include "Customer View_PHP.php";
        //echo $table;
    }elseif ($substr == "MR"){
        $table = 'meter_reader';
        include "Customer Acc.php";
        //echo $table;
    }elseif ($substr == "OP"){
        $table = 'branch_itoperator';
        include "Customer Acc.php";
        //echo $table;
    }
    else{
        $message = "enter user name password correctly";
        include "CEB_login.php";
    }
}
?>