<?php
$val = $_POST['from'];
echo $val;
if ($val == 1){
    include "Customer Acc.php";

}

else{
    $username = $_POST['username'];
    $q = "select name from customer where user_name='$username'";
    $result = $conn->query($q);
    $row = $result->fetch_assoc();
    $name = $row['name'];
    //echo " ".$username;
    include "cus_view2.php";
}