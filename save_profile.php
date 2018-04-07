<?php
include "common.php";
$reg_no=$_POST['Registration'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$name=$_POST['name'];
$sql="insert into student(reg_no,pass,name) values('$reg_no','$pass','$name')";
if($conn->query($sql) ===true)
{
    $_SESSION['reg_no']=$reg_no;
    $_SESSION['pass']=$pass;
   
    header('Location: redirect.php?c=1');
}
else {
    header('Location: '.'signup.php?c='.urlencode(1));
}

 
 
/*
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

 }*/

?>
