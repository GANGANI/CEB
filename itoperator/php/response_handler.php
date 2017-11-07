<?php
include "../../Common/queary.php";
class response{
    function giveResponse($table,$where,$var,$message){
        $sel = new queary();

        //echo $var;
        if ($var!='OTHER')
        {
            $first = substr($var, 0, -1);
            $last = substr("$var", -1);
            //echo $first;
            //echo $last;
            $result = $sel->condition_select(['name', 'email'], $table
                , $where.' =' . $first);
            $row = $result->fetch_assoc();
            $GLOBALS['name'] = $row['name'];
            $GLOBALS['email'] = $row['email'];
            if ($last=='N')
            {
                $GLOBALS['message'] = 'Your '.$message .' Is Not Recorded';

            }

            if ($last == 'R') {
                $GLOBALS['message'] = 'Your '.$message .' Is Recorded';

            }
        }
        if ($var == 'OTHER') {
            $GLOBALS['name'] = '';
            $GLOBALS['email'] = '';
            $GLOBALS['message'] = '';


        }
    }
}
$res = new response();
$var = $_POST['but'];
//echo $var." ";
$message;
$email;
$name;
$var1 = substr($var, 0, -1);
$var2 = substr("$var", -1);
//echo $var1." ";
//echo $var2;
if($var2 == 'I'){
    $res->giveResponse('inquiries','inquiry_id',$var1, 'Inquiry');
}
else if($var2 == 'C'){
    $res->giveResponse('connection_request','request_id',$var1,'Request');
}
else{
    $GLOBALS['name'] = '';
    $GLOBALS['email'] = '';
    $GLOBALS['message'] = '';
}
//echo $name;
//echo  $email;


?>