<?php
//check comments ##########################
/**
 * Created by PhpStorm.
 * User: Pamodha
 * Date: 11/4/2017
 * Time: 1:05 PM
 */
//require_once 'vendor/autoload.php';

use Stripe\Stripe;
$paymntamnt=$_SESSION['pay'];

include 'C:\xampp\htdocs\CEB\Customer\php\Bill_payment\setconnection.php';
$con = new connec();
$conn = $con->makeConnection();
$user = $_SESSION['us'];
$sql2 = "SELECT due_amount,connection_id FROM (SELECT customer_id FROM customer WHERE user_name = '$user')As connection NATURAL JOIN connection";

$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();
$due_amount = $row2['due_amount'];
$connection_id = $row2['connection_id'];
$newdueamt =$due_amount-$paymntamnt;
//echo "due amunt should be updated ".$newdueamt;


$_SESSION['newdueamout']=$newdueamt;
//echo  "myysession".$_SESSION['newdueamout'];

//$sql3="SELECT due_amount FROM  connection WHERE connection_id='GMH200002'";
$sqlupdt=" UPDATE connection SET due_amount='".$newdueamt."' WHERE connection_id='$connection_id' ";
$conn->query($sqlupdt);





//require_once '../vendor/autoload.php';
require_once 'C:\xampp\htdocs\CEB\Customer\php\Bill_payment\vendor\autoload.php';


$_SESSION['user_id']=1;

$stripe=[
    'publishable' => 'pk_test_uGsjbnhgwVBFRtRUwAZOZee2',
    'private' => 'sk_test_cSLG5h9WbyASkmQyrGpMqliC',
];


Stripe::setApiKey($stripe['private']);


//$db =new PDO('mysql:host=localhost;dbname=website', 'root', '');

//$userQuery = $db  ->prepare("
   // SELECT id, username ,email , premium
    //FROM users
    //WHERE id = :user_id
//");

//$userQuery-> execute(['user_id'=> $_SESSION['user_id']]);

//$user =$userQuery->fetchObject();

//print_r($user);



?>