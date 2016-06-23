<!DOCTYPE html>
<html>
<head>
   <title> Employee edit </title>
</head>
<body>

<h2>Delete the employee details</h2>


  


<?php
  include 'database.php';
  
   $empId=$_GET['emp_id'];
   
   $employee =new Employee("localhost","shilpa","compass","employee");

   $conn=$employee->connect();
   
    $response=$employee->getEmployee($empId, $conn);
   $employeeInfo=$response->fetch_array();

  
   $employeeName=$employeeInfo['emp_name'];
   $employeeEmail=$employeeInfo['emp_email'];
   $employeeDepartment=$employeeInfo['emp_department'];
?>


<form name ="update_form" action="delete2.php" method="GET">
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

<input type="submit" value="delete">
</form> 


</body>
</html>


