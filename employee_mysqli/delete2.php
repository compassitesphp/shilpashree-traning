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

$sqlQuery = "DELETE FROM employee_info WHERE emp_id='$empId'";
//mysql_select_db($dbname);

if (!$conn->query($sqlQuery))

  {

  die('Error: ' . $conn->error());

  }

echo "deleted the record";

?>