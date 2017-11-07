<?php

class queary
{


    function simple_select($array, $table, $Id,$n)
    {
        $sereverName ='127.0.0.1';
        $userName = 'root';
        $passWord = '';
        $dbName = 'ceb';
        $conn = mysqli_connect($sereverName,$userName,$passWord,$dbName);
        $str = '';
        for ($i = 0; $i < count($array); $i++) {

            $str .= ',' . $array[$i];

        }
        $str = substr($str, 1);
        $sql = "SELECT $str FROM  $table ORDER BY $Id DESC LIMIT 1,$n";
        $result = $conn->query($sql);
        return $result;
    }
    function condition_select($array, $table,$where)
    {
        $sereverName ='127.0.0.1';
        $userName = 'root';
        $passWord = '';
        $dbName = 'ceb';
        $conn = mysqli_connect($sereverName,$userName,$passWord,$dbName);
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