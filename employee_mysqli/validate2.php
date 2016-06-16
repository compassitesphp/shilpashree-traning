<?php
$servername="localhost";
$username="shilpa";
$passward="compass";
$dbname="employee";

$conn=new mysqli($servername,$username,$passward,$dbname);

if($conn->connect_error)
{

	die("connection failed".$conn->connect_error);
}

 
$empName=$_GET['emp_name'];
$empEmail=$_GET['emp_email'];
$empDepartment=$_GET['emp_department'];

$sqlQuery="insert into employee_info (emp_name, emp_email, emp_department) values ('$empName','$empEmail','$empDepartment')";
//print_r($sqlQuery);
//mysql_select_db($dbname);
if (!$conn->query($sqlQuery))

  {

  die('Error: ' . $conn->error());

  }

echo "1 record added";

?>