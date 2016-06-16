<?php
$servername="localhost";
$username="shilpa";
$passward="compass";
$dbname="employee";

$conn=mysql_connect($servername,$username,$passward);

if($conn->connect_error)
{

	die("connection failed".$conn->connect_error);
}

$empId=$_GET['emp_id'];
$empName=$_GET['emp_name'];
$empEmail=$_GET['emp_email'];
$empDepartment=$_GET['emp_department'];



$sqlQuery = "UPDATE employee_info SET emp_name='$empName',emp_email='$empEmail',emp_department='$empDepartment'
 WHERE emp_id='$empId'";
 mysql_select_db($dbname);


if (!mysql_query($sqlQuery))

  {

  die('Error: ' . mysql_error());

  }

echo "updated the record";

?>
