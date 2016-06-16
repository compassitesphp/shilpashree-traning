<!DOCTYPE html>
<html>
<body>

<h2>Enter the employee details</h2>

<?php
   $empId=$_GET['emp_id'];
   $conn = new mysqli('localhost','shilpa','compass','employee');
   //mysql_select_db('employee');
   $sql = "SELECT * from employee_info where emp_id=$empId";
   $response=$conn->query($sql);
   $employeeInfo=$response->fetch_array();

   $empId=$_GET['emp_id'];
   $employeeName=$employeeInfo['emp_name'];
   $employeeEmail=$employeeInfo['emp_email'];
   $employeeDepartment=$employeeInfo['emp_department'];
?>


<form name ="update_form" action="edit3.php" method="GET">
employee_Id:
<input type="text" name="emp_id" value="<?php echo $empId; ?>" />
<br><br>

employee_name:
<input type="text" name="emp_name" value="<?php echo $employeeName; ?>" />
<br><br>

employee_email:
<input type="text" name="emp_email" value="<?php echo $employeeEmail; ?>" />
<br><br>

employee_department: 
<input type="text" name="emp_department" value="<?php echo $employeeDepartment; ?>" />
<br><br> 

<input type="submit" value="update">
</form> 


</body>
</html>