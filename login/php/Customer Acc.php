<?php
include "../../Common/Connection.php";
$con = new connec();
$conn = $con->makeConnection();
//echo $table;
if (isset($_POST['username']) and isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM  $table WHERE user_name = '$username' and password = '$password'";

    $result = mysqli_query($conn,$query) or die (mysqli_error($conn));
    $count = mysqli_num_rows($result);

    if($count==1){
        $q = "select name from customer where user_name='$username'";
        $result = $conn->query($q);
        $row = $result->fetch_assoc();
        $name = $row['name'];

        //include "cus_view2.php";
        if ($substr == "CU"){
           //include "";
            //echo "cus";
            header("Location:../../Customer/php/cus_view2.php");
        }elseif ($substr == "MR"){
            //include "";
        }elseif ($substr == "OP"){
            //echo "awa";
            //echo "username is".$_SESSION['us'];
            header("Location:../../itoperator/html/index.html");

        }
        else{
            $message = "enter user name password correctly";
            include "CEB_login.php";
        }


    }else{

        $fmsg = "Invalid Login Credentails.";
        $message = "invalied";
        include "CEB_login.php";
    }
}
?>
