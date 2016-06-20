<!DOCTYPE html>
<html>
	<head>
		<style>
			.error {color: #FF0000;}

		</style>
	</head>
<body>

<?php 

$nameErr = $emailErr = "";
$name = $email = $department="";


	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	  	if (!empty($_POST["emp_name"])) 
	  	{
	    	 $name = test_input($_POST["emp_name"]);
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



	if (!empty($_POST["email"])) 
	{
	    
	    $email = test_input($_POST["email"]);
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
	  


	if (empty($_POST["emp_department"]))
	{
	    $department = "";
	}
	else
	{
	    $department = test_input($_POST["emp_department"]);
	}



	function test_input($data) 
	{
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
?>


<h2>Enter the employee details</h2>
<p><span class="error">* required field.</span></p>

	<form action="insert2.php" method="POST">

		employee_name:
		<input type="text" name="emp_name" >
		<span class="error">* <?php echo $nameErr;?> </span>
		<br><br>

		employee_email:
		<input type="text" name="emp_email" >
		<span class="error">* <?php echo $emailErr;?></span>
		<br><br>

		employee_department: 
		<input type="text" name="emp_department" >
		<br><br>

		<input type="submit" value="submit">
	</form> 

</body>
</html>
