<?php


include 'database.php';
$employee =new Employee("localhost","shilpa","compass","employee");

$conn=$employee->connect();

$empId=$_GET['emp_id'];
$empName=$_GET['emp_name'];
$empEmail=$_GET['emp_email'];
$empDepartment=$_GET['emp_department'];

$tableName="employee_info";

if(!$employee->insert($tableName,$empId,$empName,$empEmail,$empDepartment,$conn))
{
	die('Error: ' . $conn->error());
}
else

    echo " 1 record added  ";

echo "<a href='http://localhost/shilpashree-traning/employee_conn_class/list.php'>   home page</a>" ;













//$servername="localhost";
//$username="shilpa";
//$passward="compass";
//$dbname="employee";
//
//$conn=new mysqli($servername,$username,$passward,$dbname);
//
//if($conn->connect_error)
//{
//
//	die("connection failed".$conn->connect_error);
//}
//
// 
//$empName=$_GET['emp_name'];
//$empEmail=$_GET['emp_email'];
//$empDepartment=$_GET['emp_department'];
//
//$sqlQuery="insert into employee_info (emp_name, emp_email, emp_department) values ('$empName','$empEmail','$empDepartment')";
////print_r($sqlQuery);
////mysql_select_db($dbname);
//if (!$conn->query($sqlQuery))
//
//  {
//
//  die('Error: ' . $conn->error());
//
//  }
//
//echo "1 record added";

?>