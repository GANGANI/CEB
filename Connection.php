<?php
class connec{

    function makeConnection(){
        $sereverName ='127.0.0.1';
        $userName = 'root';
        $passWord = '';
        $dbName = 'ceb';
        $conn = mysqli_connect($sereverName,$userName,$passWord,$dbName);
        return $conn;
    }






}

?>