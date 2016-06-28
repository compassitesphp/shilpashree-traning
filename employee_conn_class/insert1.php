<!DOCTYPE html>
<html>
    <head>
        <style>
            .error {color: #FF0000;}

        </style>
    </head>
    <body>

        

        <h2>Enter the employee details</h2>
        <p><span class="error">* required field.</span></p>

        <form action="insert2.php" method="GET">

            employee_name:
            <input type="text" name="emp_name" >
            <span class="error">* </span>
            <br><br>

            employee_email:
            <input type="text" name="emp_email" >
            <span class="error">* </span>
            <br><br>

            employee_department: 
            <input type="text" name="emp_department" >
            <br><br>

            <input type="submit" value="submit">
        </form> 

    </body>
</html>
