<?php

class Employee {

    private $servername='localhost';
    private $username='shilpa';
    private $passward='compass';
    private $dbname='employee';
    private $connection;

    //establishing the connection
    public function __construct() {

       $this->connection = new mysqli($this->servername, $this->username, $this->passward, $this->dbname);
        if (mysqli_connect_errno())
            {
            die('ERROR : Failed to connect to the database');
        }
    } 
    
    
     public function getAll() {
        return mysqli_query($this->connection, "select * from employee_info");
    }

     public function getEmployee($emipd) {
        $sqlquery = "select * from employee_info where emp_id=" . $emipd;
        $result = $this->connection->query($sqlquery);
        return $result;
    }

    

    public function update($tableName, $empId, $empName, $empEmail, $empDepartment) {
        $sqlQuery = "UPDATE $tableName SET emp_name='$empName',emp_email='$empEmail',emp_department=		  		'$empDepartment'
 					WHERE emp_id='$empId'";

        $result = $this->connection->query($sqlQuery);
        return $result;
    }

    public function delete($tableName, $empId) {
        $sqlQuery = "DELETE FROM $tableName WHERE emp_id='$empId'";

        $result = $this->connection->query($sqlQuery);
        return $result;
    }

    public function insert($tableName, $empName, $empEmail, $empDepartment) {
        $sqlQuery = "insert into $tableName "
                . "(emp_name, emp_email, emp_department) "
                . "values ('$empName','$empEmail','$empDepartment')";

        $result = $this->connection->query($sqlQuery);
        return $result;
    }

   

}

?>