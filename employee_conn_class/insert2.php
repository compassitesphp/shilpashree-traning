<!--<!DOCTYPE html>
<html>
<head>
   <title> Employee edit </title>
</head>
<body>

<h2>Edit the employee details</h2>-->




<?php


include 'database.php';
$employee =new Employee;



$empId=$_GET['emp_id'];
$empName=$_GET['emp_name'];
$empEmail=$_GET['emp_email'];
$empDepartment=$_GET['emp_department'];

$nameErr = $emailErr = "";
$name = $email = $department="";

	if ($_SERVER["REQUEST_METHOD"] == "GET") 
	{
	  	if (!empty($_GET["emp_name"])) 
	  	{
	    	 $name = test_input($_GET["emp_name"]);
	    	// check if name only contains letters and whitespace
	   		 if (!preg_match("/^[a-zA-Z ]*$/",$name))
	    	 {
	      		$nameErr = "Only letters and white space allowed";
	     	 }
	  	} 
	  	else 
	  	{
	   		$nameErr = "Name is required";
	  	}
	 } 
	if (!empty($_GET["email"])) 
	{
	    
	    $email = test_input($_GET["email"]);
	    // check if e-mail address is well-formed
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
	    {
	      $emailErr = "Invalid email format";
	    }
	}
	else 
	{
	   $emailErr = "Email is required";
	}   
	  
	if (empty($_GET["emp_department"]))
	{
	    $department = "";
	}
	else
	{
	    $department = test_input($_GET["emp_department"]);
	}
	function test_input($data) 
	{
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}


$tableName="employee_info";

if(!$employee->insert($tableName,$empId,$empName,$empEmail,$empDepartment,$conn))
{
	die('Error: ' . $conn->error());
}

else

    echo " 1 record added  ";
$conn->close();

echo "<a href='http://localhost/shilpashree-traning/employee_conn_class/list.php'>   home page</a>" ;


?>
<!--<form name ="update_form" action="insert3.php.php" method="GET">
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

 <a><href='http://localhost/employee_conn_class/edit3.php?emp_id=" .$row['emp_id'] ."
&emp_name=."  $row['emp_name'] ."
&emp_email=." $row['emp_id'] ."
&emp_department=."$row['emp_id'] ."'>update</a>
 
<input type="submit" value="update">
</form> -->