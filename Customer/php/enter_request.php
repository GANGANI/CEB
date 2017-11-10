<?php
/**
 * Created by PhpStorm.
 * User: Dinushi Ranagalage
 * Date: 11/7/2017
 * Time: 10:53 PM
 */
include('database.php');
if (isset($_POST["submitbtn"])) {
    $Database = new Database;
    $con = $Database->connect();
    $stmt = $Database->conn->prepare("INSERT INTO connection_request (branch_no,NIC,name,email, phone_number,type_id,Read_state,contact_address,location_address,neighbour_conn_id) VALUES (?, ?, ?,?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssss", $branchNo,$nic,$name,$email, $telephone,$type_id,$read_state,$cont_address,$loc_address,$neighbour_conn_id);

    $name = $_POST["name"];
    $nic = $_POST["nic"];
    $cont_address = $_POST["cont_address"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $Category = $_POST["Category"];
    $loc_address = $_POST["loc_address"];
    $branch = $_POST["branch"];
    $neighbour_conn_id = $_POST["neighbour_conn_id"];
    $phase = $_POST["phase"];
    if ($phase=="single"){
        $current_amount="30A";
    }elseif($phase=="3phase-30"){
        $phase="3phase";
        $current_amount="30A";
    }else{
        $phase="3phase";
        $current_amount="60A";
    }

    $query1 = "SELECT branch_no FROM branch WHERE branch_name = '" . $branch . "'";
    $output1 = $Database->executeQuery($query1);
    $branchNo = $output1['0']["branch_no"];

    $query2 = "SELECT type_id FROM type WHERE current_phase='".$phase."' AND current_amount='".$current_amount."' And type_name='" .$Category ."'";
    $output2 = $Database->executeQuery($query2);
    $type_id = $output2['0']["type_id"];

    $read_state='NO';


    //$values = array($branchNo,$nic,$name,$email, $telephone,$type_id,'NO',$cont_address,$loc_address,$neighbour_conn_id );
    //$rows = "branch_no,NIC,name,email, phone_number,type_id,Read_state,contact_address,location_address,neighbour_conn_id";
    //$result = $Database->insert('connection_request', $values, $rows);
    $result=$stmt->execute();

    if ($result){
        echo '<script>alert("The Connection Request is Suceesfully Entered!!"); location.replace("new_request.php");</script>';
    }
    else{
        echo '<script>alert("Error in submitting the Connection Request.Try Again!"); location.replace("new_request.php");</script>';
    }
    $Database->disconnect();
}
?>