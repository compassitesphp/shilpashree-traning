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

$empId=$_GET['emp_id'];
$empName=$_GET['emp_name'];
$empEmail=$_GET['emp_email'];
$empDepartment=$_GET['emp_department'];



$sqlQuery = "UPDATE employee_info SET emp_name='$empName',emp_email='$empEmail',emp_department='$empDepartment'
 WHERE emp_id='$empId'";
 //mysql_select_db($dbname);


if (!$conn->query($sqlQuery))

  {

  die('Error: ' . $conn->error());

  }

echo "updated the record";

?>

