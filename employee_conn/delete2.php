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

$sqlQuery = "DELETE FROM employee_info WHERE emp_id='$empId'";
mysql_select_db($dbname);

if (!mysql_query($sqlQuery))

  {

  die('Error: ' . mysql_error());

  }

echo "deleted the record";

?>