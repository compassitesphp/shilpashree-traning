
<?php

include 'database.php';
$employee = new Employee;



$empId = $_GET['emp_id'];
$empName = $_GET['emp_name'];
$empEmail = $_GET['emp_email'];
$empDepartment = $_GET['emp_department'];

$nameErr = $emailErr = "";
$name = $email = $department = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!empty($_GET["emp_name"])) {
        $name = test_input($_GET["emp_name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    } else {
        $nameErr = "Name is required";
    }
}
if (!empty($_GET["email"])) {

    $email = test_input($_GET["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }
} else {
    $emailErr = "Email is required";
}

if (empty($_GET["emp_department"])) {
    $department = "";
} else {
    $department = test_input($_GET["emp_department"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$tableName = "employee_info";

if (!$employee->insert($tableName, $empName, $empEmail, $empDepartment)) {
    die('Error: ' . $conn->error());
} else
    echo " 1 record added  ";


echo "<a href='http://localhost/shilpashree-traning/employee_conn_class/list.php'>   home page</a>";
$conn->close();
?>
