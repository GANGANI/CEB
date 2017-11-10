<?php
/**
 * Created by PhpStorm.
 * User: Dinushi Ranagalage
 * Date: 11/6/2017
 * Time: 11:49 PM
 */
	include('database.php');
	session_start();
	$meter_reader_name = $_SESSION['us'];
    $Database=new Database;
	$result=$Database->connect();

	//$meter_reader_id="00001MR";//get this value from the post method when the page loads from login
	$query4 = "SELECT meter_reader_id FROM meter_reader WHERE user_name='$meter_reader_name'";
	$output4 = $Database->executeQuery($query4);
	$meter_reader_id = $output4['0']['meter_reader_id'];
	$query5="SELECT meter_reader_id,name,branch_name FROM (SELECT * FROM meter_reader WHERE meter_reader_id ='".$meter_reader_id."')AS Reader NATURAL JOIN branch";
	$meter_reader_data=$Database->executeQuery($query5);

	if ($result){
        //select distinct data.connection_id,Customer.name,Customer.NIC_no,data.location_address From  (select distinct connection_id,customer_id, location_address From (SELECT distinct connection_id FROM assigned_connection  WHERE meter_reader_id='00002MR' AND has_read='0') AS cons NATURAL JOIN connection) AS data Natural Join Customer;
        //$query1="CREATE VIEW connections".$meter_reader_id."  AS SELECT distinct connection_id,customer_id, location_address FROM connection NATURAL JOIN assigned_connection WHERE meter_reader_id='".$meter_reader_id."' AND  ";
        $query1="select distinct data.connection_id,customer.name,customer.NIC_no,data.location_address From  (select distinct connection_id,customer_id, location_address From (SELECT distinct connection_id FROM assigned_connection  WHERE meter_reader_id='".$meter_reader_id."' AND has_read='0') AS cons NATURAL JOIN connection) AS data Natural Join Customer";

        $output=$Database->executeQuery($query1);
        //need to handle exceptions when tables are not found
        //$query2= "SELECT distinct connection_id,name,NIC_no,address FROM connections".$meter_reader_id." NATURAL JOIN customer";

        //$output=$Database->executeQuery($query2);
        $Database->disconnect();
    }
?>
