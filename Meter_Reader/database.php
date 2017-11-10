<?php
/**
 * Created by PhpStorm.
 * User: Dinushi Ranagalage
 * Date: 11/6/2017
 * Time: 11:50 PM
 */
class Database
{
    protected $db_host = '127.0.0.1';
    protected $db_user = 'root';
    protected $db_pass = '';
    protected $db_name = 'database_ceb';
    protected $conn;
    public $result = array();//holds the data fetched from the database


    public function connect()
    {
        $this->conn = new mysqli($this->db_host, $this->db_user, $this->db_pass);

        //Check connection
        if ($this->conn->connect_error) {
            die("connection failed: " . $this->conn->connect_error);
            return false;
        } else {
            //this will select the database DB_systemUsers
            if (mysqli_select_db($this->conn, $this->db_name)) {
                //echo "\n Database CEB is selected Successfully.<br>";
                return true;
            } else {
                echo "\n Database CEB can not be connected.<br>";
                return false;
            }
        }
    }
    public function insert($table,$values,$rows = null)
    {
        if($this->tableExists($table))
        {

            $insert = 'INSERT INTO '.$table;
            if($rows != null)
            {
                $insert .= ' ('.$rows.')';
            }
            for($i = 0; $i < count($values); $i++)
            {
                if(is_string($values[$i]))
                    $values[$i] = '"'.$values[$i].'"';
            }
            $values = implode(',',$values);
            $insert .= ' VALUES ('.$values.')';
            //echo $insert;
            $ins =mysqli_query($this->conn , $insert);
            if($ins)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }
    public function delete($table,$where = null)
    {
        if($this->tableExists($table))
        {
            if($where == null)
            {
                $delete = 'DELETE '.$table;
            }
            else
            {
                $delete = 'DELETE FROM '.$table.' WHERE '.$where;
            }
            $del = mysqli_query($this->conn,$delete);

            if($del)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }

    public function select($table, $rows = '*', $where = null, $order = null)
    {
        $q = 'SELECT '.$rows.' FROM '.$table;
        if($where != null)
            $q .= ' WHERE '.$where;
        if($order != null)
            $q .= ' ORDER BY '.$order;
        if($this->tableExists($table))
        {
            $query=mysqli_query($this->conn , $q);
            if($query)
            {
                $numResults = mysqli_num_rows($query);
                for($i = 0; $i < $numResults; $i++)
                {
                    $r = mysqli_fetch_array($query);
                    $key = array_keys($r);
                    for($x = 0; $x < count($key); $x++)
                    {
                        // Sanitizes keys so only alphavalues are allowed
                        if(!is_int($key[$x]))
                        {
                            if(mysqli_num_rows($query) > 1)
                                $this->result[$i][$key[$x]] = $r[$key[$x]];
                            else if(mysqli_num_rows($query) < 1)
                                $this->result = null;
                            else
                                $this->result[$key[$x]] = $r[$key[$x]];
                        }
                    }
                }
                return $this->result;
            }
            else
            {
                return false;
            }
        }
        else
            return false;
    }

    public function update($table,$rows,$where)
    {
        if($this->tableExists($table))
        {
            // Parse the where values
            // even values (including 0) contain the where rows
            // odd values contain the clauses for the row
            for($i = 0; $i < count($where); $i++)
            {
                if($i%2 != 0)
                {
                    if(is_string($where[$i]))
                    {
                        if(($i+1) != null)
                            $where[$i] = '"'.$where[$i].'" AND ';
                        else
                            $where[$i] = '"'.$where[$i].'"';
                    }
                }
            }
            $where = implode('=',$where);


            $update = 'UPDATE '.$table.' SET ';

            $keys = array_keys($rows);
            for($i = 0; $i < count($rows); $i++)
            {
                if(is_string($rows[$keys[$i]]))
                {
                    $update .= $keys[$i].'="'.$rows[$keys[$i]].'"';
                }
                else
                {
                    $update .= $keys[$i].'='.$rows[$keys[$i]];
                }

                // Parse to add commas
                if($i != count($rows)-1)
                {
                    $update .= ',';
                }
            }

            $update .= ' WHERE '.$where;
            //echo $update;
            $query  = mysqli_query($this->conn,$update);
            if($query)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }

    private function tableExists($table)
    {
        if ($result = mysqli_query($this->conn , "SHOW TABLES LIKE '" . $table . "'")){
            if ($result->num_rows == 1) {
                //echo "Table exists";
                return true;
            }else {
                echo "Table does not exist";
                return false;
            }
        }
    }

    public function disconnect()
    {
        if($this->conn)
        {
            if(mysqli_close($this->conn))
            {
                $this->conn = false;
                return true;
            }
            else
            {
                return false;
            }
        }
    }

    public function executeQuery($sqli){
        $output =mysqli_query($this->conn , $sqli);
        echo "<br>";
        return $this->convertToArray($output);


    }
    public function executeQuery2($sqli){
        return mysqli_query($this->conn , $sqli);
    }


    public function convertToArray($output){
        $result1 = array();
        if($output)
        {
            $numResults = mysqli_num_rows($output);
            for($i = 0; $i < $numResults; $i++)
            {
                $r = mysqli_fetch_array($output);
                $key = array_keys($r);
                for($x = 0; $x < count($key); $x++)
                {
                    // Sanitizes keys so only alphavalues are allowed
                    if(!is_int($key[$x]))
                    {
                        if(mysqli_num_rows($output) > 0)
                            $result1[$i][$key[$x]] = $r[$key[$x]];
                        else if(mysqli_num_rows($output) < 1)
                            $result1 = null;
                        //else
                           // $result1[$key[$x]] = $r[$key[$x]];
                    }
                }

            }
        }
        return $result1;
    }
}
//$Databse=new Database();
//$Databse->connect();
//$Databse->tableExists("tbl_complaint");
//$values=('$priority','$description',
//'$location','$details','$problemsCaused','$procedureOfCompletion','$duration','$cost','$empRequirement')";
//$values=['gbb','bbn','nnn','mmm','jm','6','7','8','9'];
//$rows="priority,description,location,details,problemsCaused,procedureOfCompletion,duration,cost,empRequirement";
//$table="tbl_complaint";
//$Databse->insert($table,$values ,$rows);
//echo $Databse->select($table);
//print_r($Databse->result);
//"INSERT INTO tbl_complaint (priority,description,location,details,problemsCaused,procedureOfCompletion,duration,cost,empRequirement,) VALUES ('$priority','$description',
//'$location','$details','$problemsCaused','$procedureOfCompletion','$duration','$cost','$empRequirement')";
//
//$sqli="UPDATE tbl_complaint SET procedureOfCompletion='No defined process' WHERE complaint_id='1'";
//
//$Databse->executeQuery($sqli);
