<?php


include 'database.php';
$employee =new Employee("localhost","shilpa","compass","employee");

$conn=$employee->connect();
$empId=$_GET['emp_id'];
$empName=$_GET['emp_name'];
$empEmail=$_GET['emp_email'];
$empDepartment=$_GET['emp_department'];

$tableName="employee_info";

if(!$employee->update($tableName,$empId,$empName,$empEmail,$empDepartment,$conn)
{
	die('Error: ' . $conn->error());
}
else
	echo "updated the record";

echo "<a href='http://localhost/employee_conn_class/list.php'>home page</a>" ;



/*$servername="localhost";
$username="shilpa";
$passward="compass";
$dbname="employee";

$conn=new mysqli($servername,$username,$passward,$dbname);

if($conn->connect_error)
{

	die("connection failed".$conn->connect_error);
}

$empId=$_GET['emp_id'];
$empName=$_GET['emp_name'];
$empEmail=$_GET['emp_email'];
$empDepartment=$_GET['emp_department'];



$sqlQuery = "UPDATE employee_info SET emp_name='$empName',emp_email='$empEmail',emp_department='$empDepartment'
 WHERE emp_id='$empId'";*/
 //mysql_select_db($dbname);


/*if (!$conn->query($sqlQuery))

  {

  die('Error: ' . $conn->error());

  }

echo "updated the record";*/

?>

