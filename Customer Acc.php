<?php
include "Connection.php";
$con = new connec();
$conn = $con->makeConnection();

if (isset($_POST['username']) and isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM  customer WHERE user_name = '$username' and password = '$password'";

    $result = mysqli_query($conn,$query) or die (mysqli_error($conn));
    $count = mysqli_num_rows($result);

    if($count==1){
        $q = "select name from customer where user_name='$username'";
        $result = $conn->query($q);
        $row = $result->fetch_assoc();
        $name = $row['name'];
        echo $name;
        include "cus_view2.php";


    }else{

        $fmsg = "Invalid Login Credentails.";
        $message = "invalied";
        include "CEB_login.php";
    }
}
?>
