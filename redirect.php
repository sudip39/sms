<?php 
include('common.php');
$w=$_GET['c'];
if($w==1)
{
    $reg_no=$_SESSION['reg_no'];
    $pass=$_SESSION['pass'];
}
else
{
 $reg_no=$_POST['reg_no'];
 $pass=$_POST['pass'];}
 
 $sql="select * from student where reg_no=$reg_no and pass='$pass' ";
 $result=$conn->query($sql);
 
 if($result)
 {
  while($obj=mysqli_fetch_array($result))
  {
    $_SESSION['id']= $obj['id'];
    $_SESSION['name']=$obj['name'];                             
      header("Location:"."active.php");
  }
    
 }
 else {
     echo "Wrong";
 }
?>