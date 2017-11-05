<?php

include "Connection.php";


class queary
{


    function simple_select($array, $table)
    {
        $conn = new connec();
        $conn = $conn->makeConnection();
        $str = '';
        for ($i = 0; $i < count($array); $i++) {

            $str .= ',' . $array[$i];

        }
        $str = substr($str, 1);
        $sql = "SELECT $str FROM  $table";
        $result = $conn->query($sql);
        return $result;
    }
    function condition_select($array, $table,$where)
    {
        $conn = new connec();
        $conn = $conn->makeConnection();
        $str = '';
        for ($i = 0; $i < count($array); $i++) {

            $str .= ',' . $array[$i];

        }
        $str = substr($str, 1);
        $sql = "SELECT $str FROM  $table WHERE $where";
        $result = $conn->query($sql);
        return $result;
    }








}
//$var = new table();
//$result=$var->simple_select(['name'],'connection_request');
//while ($row = $result->fetch_assoc()) {
    //echo $row['name'].' ';

//}







?>