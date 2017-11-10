<?php
/**
 * Created by PhpStorm.
 * User: Dinushi Ranagalage
 * Date: 11/6/2017
 * Time: 11:51 PM
 */include('database.php');
$Database=new Database;
$con=$Database->connect();
$reading=$_POST["reading"];

$connection_id=$_POST["connection_id"];

$meter_reader_id=$_POST["meter_reader_id"];



$query1="SELECT max(bill_no) FROM bill_details WHERE connection_id = '".$connection_id."'";
$output=$Database->executeQuery($query1);

$bill_no=$output["0"]["max(bill_no)"]+1;
$units=calculate_Units($reading,$connection_id,$output["0"]["max(bill_no)"],$Database);

$monthly_bill=calculate_Monthly_Bill($units,$connection_id,$Database);
$read_date=date("j, n, Y");
$month=date('M Y');

//calculate the amount of units consumed in the month
function calculate_Units($reading,$connection_id,$prev_bill_no,$Database){
    $query1="SELECT meter_reading FROM bill_details WHERE connection_id = '".$connection_id."' AND bill_no='".$prev_bill_no."'";
    $output2=$Database->executeQuery($query1);
    $prev_reading=$output2['0']["meter_reading"];
    if ($reading <$prev_reading){
        echo '<script>alert("Invalid Reading.Monthly Reading is lesser than the last Month Reading."); location.replace("gui.php");</script>';
        return false;
    }else{
        return (int)$reading-(int)$prev_reading;

    }

}

//calculate the monthly bill amount
function calculate_Monthly_Bill($units,$connection_id,$Database){
    $query1="SELECT * FROM unit_range WHERE type_id in (SELECT type_id FROM connection WHERE connection_id = '".$connection_id."') ORDER BY range_id";
    $monthly_bill=0.0;
    $output2=$Database->executeQuery($query1);
    $prev=0.0;
    for($i = 0; $i < count($output2); $i++){
        $val=$output2[$i]["U_range"];
        if($units<=$val or $val="otherwise"){
            $monthly_bill+=(($units-$prev)*$output2[$i]["energy_charge"])+$val=$output2[$i]["fixed_charge"];
            break;
        }else{
            $monthly_bill+=(($val-$prev)*$output2[$i]["energy_charge"])+$val=$output2[$i]["fixed_charge"];
            $prev=$val;
        }
    }
    return $monthly_bill;
}
$values=array($connection_id,$bill_no,$reading,$month,$monthly_bill,$read_date,$meter_reader_id,$units);
$rows="connection_id,bill_no,meter_reading,month,monthly_bill,reading_date,meter_reader_id,units";
$result=$Database->insert('bill_details',$values ,$rows);

if ($result) {
    $query3 = "SELECT due_amount FROM Connection WHERE connection_id = '" . $connection_id . "'";
    $output3 = $Database->executeQuery($query3);
    $new_due_amount = $output3["0"]["due_amount"] + $monthly_bill;
    $query3 = "Update Connection SET due_amount='" . $new_due_amount . "' WHERE connection_id = '" . $connection_id . "'";
    $result3 = $Database->executeQuery2($query3);
    $query4 = "Update assigned_connection SET has_read='1' WHERE connection_id = '" . $connection_id . "' AND meter_reader_id = '" . $meter_reader_id . "' ";
    $result4 = $Database->executeQuery2($query4);

    if ($result3 and $result4) {
        echo '<script>alert("The Bill is suceesfully Entered!!"); location.replace("gui.php");</script>';
    }
    else {
        echo '<script>alert("Error in submitting the bill.Try Again!"); location.replace("gui.php");</script>';
    }
}
//$query1="INSERT INTO bill_details(connection_id, bill_no, meter_reading,month,monthly_bill,reading_date,meter_reader_id,units) VALUES (value1, value2, value3, ...)";
?>