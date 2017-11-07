<?php
include "../../Common/queary.php";
$var = $_POST['but'];
//echo $var;
$sel = new queary();

$result = $sel->condition_select(['name','branch_no','email','address','phone_number','type_id','type_name','description'],$sel->simpleNaturalJoin('connection_request','type')
    ,'request_id ='.$var);
$row = $result->fetch_assoc();
$name = $row['name'];
$email = $row['email'];
$address = $row['address'];
$pn = $row['phone_number'];
$type = $row['type_name'];
$des = $row['description'];
?>