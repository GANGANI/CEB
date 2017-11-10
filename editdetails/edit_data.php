<?php

include "../Common/queary.php";
session_start();
$user = $_SESSION['us'];
//echo $_SESSION['us'];
$substr = substr($user, 0, 2);
$connc = new connec();
$conn = $connc->makeConnection();
if ($substr == 'OP') {
    $sql = "select name,operator_id,password,email,address,phone_number from branch_itoperator where user_name = '$user'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $id = $row['operator_id'];
}
elseif ($substr=='CU'){
    $sql = "select name,customer_id,password,email,address,phone_number from customer where user_name = '$user'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $id = $row['customer_id'];
}
else if($substr == 'MR'){
    $sql = "select name,meter_reader_id,password,email,address,phone_number from meter_reader where user_name = '$user'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $id = $row['meter_reader_id'];
}
$pw = $row['password'];
$_SESSION['pass']=$pw;
$name =$row['name'];
$add = $row['address'];
$pn = $row['phone_number'];
$mail=$row['email'];


























?>





























?>