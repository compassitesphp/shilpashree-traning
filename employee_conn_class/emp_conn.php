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


		$conn= new mysqli($servername,$username,$passward,$dbname);
		if($conn->connect_error)
		{

			die("connection failed".$conn->connect_error);
		}
	}
	

	//displaying all record
	public function display_all_record()
	{
		$sql="select * from employee_info";
		$result=$conn->query($sql);

		if ($result->num_rows > 0) 
		{
			echo '<table border="1" style="width:100%">';
			echo"<tr>";
				echo "<th>employee_id</th>";
				echo "<th>employee_name</th>";
				echo "<th>employee_email</th>";
				echo "<th>employee_department</th>";
			echo "</tr>";

			while($row=mysqli_fetch_array($result))
			{
				echo"<tr>";
					echo "<td>" . $row['emp_id'] . "</td>";
					echo "<td>" . $row['emp_name'] . "</td>";
					echo "<td>" . $row['emp_email'] . "</td>";
					echo "<td>" . $row['emp_department'] . "</td>";
				echo "</tr>";
			}		

			echo "</table>";		

		}
		else
		{	
			echo "no record were found";
		}

	}
	//inser a row into database

	public function insert($_GET['emp_name'],$_GET['emp_email'],$_GET['emp_department'])
	{

		$empName=$_GET['emp_name'];
		$empEmail=$_GET['emp_email'];
		$empDepartment=$_GET['emp_department'];

		$sqlQuery="insert into employee_info (emp_name, emp_email, emp_department) values ('$empName','$empEmail','$empDepartment')";

		if (!$conn->query($sqlQuery))

  		{

  			die('Error: ' . $conn->error());

  		}

		echo "1 record added";

	}

	//update a row


	public function upadte($_GET['emp_id'],$_GET['emp_name'],$_GET['emp_email'],$_GET['emp_department'])
	{

		$empId=$_GET['emp_id'];
		$empName=$_GET['emp_name'];
		$empEmail=$_GET['emp_email'];
		$empDepartment=$_GET['emp_department'];

		$sql = "SELECT * from employee_info where emp_id=$empId";
   		$response=$conn->query($sql);
   		$employeeInfo=$response->fetch_array();


		$sqlQuery = "UPDATE employee_info SET emp_name='$empName',emp_email='$empEmail',emp_department='$empDepartment'
 			WHERE emp_id='$empId'";

		if (!$conn->query($sqlQuery))

  		{

  			die('Error: ' . $conn->error());

  		}

	}

	//delete a row
	public function delete($_GET['emp_id'])
	{
		$empId=$_GET['emp_id'];

		$sqlQuery = "DELETE FROM employee_info WHERE emp_id='$empId'";

		if (!$conn->query($sqlQuery))

  		{

  			die('Error: ' . $conn->error());

  		}

		echo "deleted the record";

	}

}

$employee1=new Employee("localhost","shilpa","compass","employee");

