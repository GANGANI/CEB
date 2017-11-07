<?php
include "../../Common/Connection.php";
$con = new connec();
$conn = $con->makeConnection();
session_start();
$val = $_SESSION['val'];
//echo $val;
if ($val == 1){
    include "Customer Acc.php";

}

else{
    $username = $_SESSION['us'];
    $q = "select name from customer where user_name='$username'";
    $result = $conn->query($q);
    $row = $result->fetch_assoc();
    $name = $row['name'];
    //echo " ".$username;
    header("Location:../../Customer/php/cus_view2.php");
}