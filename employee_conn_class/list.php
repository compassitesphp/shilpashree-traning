<!DOCTYPE html>
<html>
<head>
<title>employee details</title>
	 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
      body{
          background-color: darkseagreen;
          
      }
      h2{
          text-transform: capitalize;
      }
      
      
      tr:hover
      {background-color:#f5f5f5}
      
      a:hover
      {
          color:crimson;
      }
  </style>
  
</head>
<body>
    
   		<?php

                   include 'database.php';
                   

                  $employee = new Employee("localhost", "shilpa", "compass", "employee");
                 $result = $employee->getAll();


                   echo "<div class='container'>";
		   echo "<h2>employee details</h2>";
		   if ($result->num_rows > 0) 
		  {
						
                    echo  "<table class='table table-bordered'>";
    			echo "<thead>";
      			echo"<tr>";
							
                            echo "<th>Employee_id</th>";
                            echo "<th>Employee_name</th>";
                            echo "<th>Employee_email</th>";
                            echo "<th>Employee_department</th>";
                            echo "<th>Update</th>";
                            echo "<th>Delete</th>";
			echo "</tr>";
			echo "</thead>";
   
			echo "<tbody>";
			 while($row=mysqli_fetch_array($result))
			 {

                            echo"<tr>";
                                echo "<td>" . $row['emp_id'] . "</td>";
                                echo "<td>" . $row['emp_name'] . "</td>";
                                echo "<td>" . $row['emp_email'] . "</td>";
                                echo "<td>" . $row['emp_department'] . "</td>";
                                
                                echo "<td><a href=";
                                    echo "'http://localhost/shilpashree-traning/employee_conn_class/edit2.php?emp_id=" . $row['emp_id'] . "'";
                                echo "'>edit</a></td>";


                                echo "<td><a href=";
                                    echo "'http://localhost/shilpashree-traning/employee_conn_class/delete1.php?emp_id=" . $row['emp_id'] . "'";
                                echo "'>delete</a></td>";

								
								//echo"<a href='http://localhost/employee_conn_class/delete.php'>delete</a> </td>";
                            echo "</tr>";
			}		
			echo "</tbody>";
     echo "</table>";		
						
		}
		else
		{
      echo "no record were found";
		}

					
		echo "</div >";						  

 ?>
    <div class="container">
        <form action="insert1.php" method="GET">
            <input type="submit" value="insert">
        </form> 
    </div>    
           
  </body>
</html>
