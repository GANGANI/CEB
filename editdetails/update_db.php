<?php
include "../Common/Connection.php";
$name = $_POST['name'];
$pn = $_POST['pn'];
$mail = $_POST['mail'];
$cpw = $_POST['cpw'];
$npw = $_POST['npw'];
session_start();
//echo "name is".$name;
//echo "password is".$pn;
//echo "mail is".$mail;
//echo $_SESSION['pass'];
//echo $name." ".$pn." ".$mail." ".$cpw." ".$npw;
$connec = new connec();
$conn = $connec->makeConnection();
if($name !='' && $pn !=''  && $mail !='' && $cpw != '') {
    $name = $_POST['name'];
    $pn = $_POST['pn'];
    $mail = $_POST['mail'];
    $cpw = $_POST['cpw'];
    $_POST = $_POST['npw'];
    if ($cpw == $_SESSION['pass']){
        //echo "correct";
        $user = $_SESSION['us'];
        //echo $_SESSION['us'];
        $substr = substr($user, 0, 2);
        if($substr == "OP") {
            //echo "op";
            if ($npw != '') {
                //echo "set";
                $sql = "UPDATE branch_itoperator SET name='$name',password='$npw',phone_number='$pn',email='$mail'  WHERE user_name='$user'";
            } else {
                //echo "notset";
                $sql = "UPDATE branch_itoperator SET name='$name',phone_number='$pn',email='$mail'  WHERE user_name='$user'";
            }
        }
            if($substr == "CU") {
                //echo "op";
                if ($npw != '') {
                    //echo "set";
                    $sql = "UPDATE customer SET name='$name',password='$npw',phone_number='$pn',email='$mail'  WHERE user_name='$user'";
                } else {
                    //echo "notset";
                    $sql = "UPDATE customer SET name='$name',phone_number='$pn',email='$mail'  WHERE user_name='$user'";
                }
            }
                if($substr == "MR"){
                    //echo "op";
                    if($npw!='') {
                        //echo "set";
                        $sql = "UPDATE meter_reader SET name='$name',password='$npw',phone_number='$pn',email='$mail'  WHERE user_name='$user'";
                    }

                    else{
                        //echo "notset";
                        $sql = "UPDATE meter_reader SET name='$name',phone_number='$pn',email='$mail'  WHERE user_name='$user'";
                    }



        }
        mysqli_query($conn,$sql);
        echo "<script type='text/javascript'>alert('SAVE CHANGES');</script>";
        header("refresh:0.5; url=editdetail_gui.php" );

    }
    else{
        //$message = $_SESSION['msg'];
        echo "<script type='text/javascript'>alert('PASSWORD UNMATCHED');</script>";
        header("refresh:0.5; url=editdetail_gui.php" );
    }

}
else{
    echo "<script type='text/javascript'>alert('FILL ALL FIELDS');</script>";
    //header('Location:editdetail_gui.php');
    header("refresh:0.5; url=editdetail_gui.php" );

}










?>