<?php
include "../../Common/queary.php";
$var = $_POST['but'];
//echo $var;
$sel = new queary();

$result = $sel->condition_select(['name','email','address','telephone_no','message','Inquiry','customer_id','inquiry_id'],'inquiries'
    ,'inquiry_id ='.$var);
$row = $result->fetch_assoc();
$name = $row['name'];
$email = $row['email'];
$address = $row['address'];
$pn = $row['telephone_no'];
$des = $row['message'];
$i_name=$row['Inquiry'];
$u_id=$row['customer_id'];
$i_id = $row['inquiry_id'];





























?>