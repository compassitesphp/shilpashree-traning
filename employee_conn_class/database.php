<?php

class Employee
{

	private $servername;
	private $username;
	private $passward;
	private $dbname;

	//establishing the connection
	public function __construct($servername,$username,$passward,$dbname)
	{

		$this->$servername=$servername;
		$this->username=$username;
		$this->passward=$passward;
		$this->dbname=$dbname;

	}	

	public function connect()
	{
		$conn= new mysqli($this->servername,$this->username,$this->passward,$this->dbname);
		if($conn->connect_error)
		{

			die("connection failed".$conn->connect_error);
		}
		return $conn;
	}


	public function update($tableName,$empId,$empName,$empEmail,$empDepartment,$conn)
	{
		$sqlQuery = "UPDATE $tableName SET emp_name='$empName',emp_email='$empEmail',emp_department=		  		'$empDepartment'
 					WHERE emp_id='$empId'";

 		$result=$conn->query($sqlQuery);
 		return $result;
	}
        
        public function delete($tableName,$empId,$conn)
        {
            $sqlQuery="DELETE FROM $tableName WHERE emp_id='$empId'";
            
            $result=$conn->query($sqlQuery);
             return $result;
            
        }

}
?>
		
