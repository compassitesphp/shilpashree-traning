<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'database.php';
$employee =new Employee;



$empId=$_GET['emp_id'];
$empName=$_GET['emp_name'];
$empEmail=$_GET['emp_email'];
$empDepartment=$_GET['emp_department'];

$tableName="employee_info";

if(!$employee->delete($tableName,$empId))
{
	die('Error: ' . $conn->error());
}
else

	echo "deleted  the record  ";


echo "<a href='http://localhost/shilpashree-traning/employee_conn_class/list.php'>   home page</a>" ;

$conn->close();
?>