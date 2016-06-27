<?php

include 'database.php';
$employee = new Employee;

//$conn = $employee->connect();
$empId = $_GET['emp_id'];
$empName = $_GET['emp_name'];
$empEmail = $_GET['emp_email'];
$empDepartment = $_GET['emp_department'];

$tableName = "employee_info";

if (!$employee->update($tableName, $empId, $empName, $empEmail, $empDepartment)) {
    die('Error: ' . $conn->error());
} else
    echo "updated the record  ";
$conn->close();

echo "<a href='http://localhost/shilpashree-traning/employee_conn_class/list.php'>   home page</a>";
?>

