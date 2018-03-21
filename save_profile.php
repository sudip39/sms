<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db_name = "sms";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
echo "Connected successfully";

$reg_no=$_POST['Registration'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$name=$_POST['name'];
$sql="insert into student(reg_no,pass,name) values('$reg_no','$pass','$name')";
if($conn->query($sql) ===true)
{
    echo "<script> alert('Successfully signed up')</script>";
    header('Location: '.'profile.php?name='.urlencode($name));
}
else 
{
    echo "error";
}
 
 

$department=$_POST['department'];
$rollno=$_POST['rollno'];
$degree=$_POST['degree'];
$registration_no=$_POST['registration_no'];
$email=$_POST['email'];
$pre_add=$_POST['present_address'];
$par_add=$_POST['permanent_address'];
$ph_no=$_POST['phone_number'];
$p_ph_no=$_POST['permanent_phone_number'];
$sql="insert into stu_det values";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

 }
$conn->close();
}
?>
