<!DOCTYPE html>
<html>
<body>

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

mysql_select_db('$dbname'); 
$empId=$_GET['emp_id'];

 $sql = "SELECT * from employee_info where emp_id=$empId";
  $response=mysql_query($sql);
   $employeeInfo=mysql_fetch_array($response);

   $employeeName=$employeeInfo['emp_name'];
   $employeeEmail=$employeeInfo['emp_email'];
   $employeeDepartment=$employeeInfo['emp_department'];
?>
<h2>Edit the employee details</h2>

<form name ="update_form" action="edit3.php.php" method="GET">
employee_name:
<input type="text" name="emp_name" value="<?php echo $employeeName; ?>" />
<br><br>

employee_email:
<input type="text" name="emp_email" />
<br><br>

employee_department: 
<input type="text" name="emp_department" />
<br><br>

<input type="submit" value="update">
</form> 
<?php
$empName=$_GET['emp_name'];
$empEmail=$_GET['emp_email'];
$empDepartment=$_GET['emp_department'];


$sql1 = "UPDATE employee_info SET emp_name='$empName',emp_email='$empEmail',emp_department='$empDepartment'
 WHERE emp_id='$empId'";

if(mysql_query($conn, $sql1))
{

    echo "Records were updated successfully.";
}

?>
</body>
</html>
