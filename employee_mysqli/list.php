<!DOCTYPE html>
<html>
<head>
	<title>employee details</title>
	<style>
	table
	{
		font-size: 20pt;
	}
	</style>
</head>

<body>

<?php
$servername="localhost";
$username="shilpa";
$passward="compass";
$dbname="employee";

$conn= new mysqli($servername,$username,$passward,$dbname);
if($conn->connect_error)
{

	die("connection failed".$conn->connect_error);
}


//echo "connection established";

$sql="select * from employee_info";
$result=$conn->query($sql);
if ($result->num_rows > 0) 
{
	echo '<table border="1" style="width:100%; font-family: Arial, Helvetica;">';
		echo"<tr>";
			echo "<th>emp_id</th>";
			echo "<th>emp_name</th>";
			echo "<th>emp_email</th>";
			echo "<th>emp_department</th>";
		echo "</tr>";

	while($row=mysqli_fetch_array($result))
	{
		echo"<tr>";
			echo "<td>" . $row['emp_id'] . "</td>";
			echo "<td>" . $row['emp_name'] . "</td>";
			echo "<td>" . $row['emp_email'] . "</td>";
			echo "<td>" . $row['emp_department'] . "</td>";
		echo "</tr>";
	}		

	echo "</table>";		

}
else
{
	echo "no record were found";
}



/*$result=$conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "emp_id: " . $row['emp_id'] . " - Name: " . $row['emp_name'] . "email " . $row['emp_email'] . "depaertment" . $row['emp_department'] . "<br>";
    }
} else {
    echo "0 results";
}*/
?>

</body>
</html>





