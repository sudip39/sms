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

 
 


?>
