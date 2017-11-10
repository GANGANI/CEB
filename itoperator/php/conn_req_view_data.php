<?php
include "../../Common/queary.php";
$var = $_POST['but'];
//echo $var;
$sel = new queary();

$result = $sel->condition_select(['name','branch_no','nic','email','contact_address','phone_number','type_id','neighbour_conn_id','location_address'],'connection_request'
    ,'request_id ='.$var);

$row = $result->fetch_assoc();
$name = $row['name'];
$email = $row['email'];
$nic = $row['nic'];
$branch_no = $row['branch_no'];
$contact_address = $row['contact_address'];
$pn = $row['phone_number'];
$type_id = $row['type_id'];
$neighbour_conn_id = $row['neighbour_conn_id'];
$location_address= $row['location_address'];
$sql = "UPDATE connection_request SET Read_state = 'YES'  WHERE request_id='$var'";
$connec = new connec();
$conn = $connec->makeConnection();
mysqli_query($conn,$sql);
?>