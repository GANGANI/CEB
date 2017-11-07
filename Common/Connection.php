<?php
class connec{

    function makeConnection(){
        $sereverName ='127.0.0.1';
        $userName = 'root';
        $passWord = '';
        $dbName = 'database_ceb';
        $conn = mysqli_connect($sereverName,$userName,$passWord,$dbName);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}

?>